<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 20);
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->longText('icon_html')->nullable();
            $table->longText('content_html')->nullable();
            $table->boolean('virtual');
            $table->boolean('status');
            $table->unsignedBigInteger('id_picture')->nullable();
            $table->foreign('id_picture')->references('id')->on('picture')->onDelete('cascade');
            $table->unsignedBigInteger('last_edit')->nullable();
            $table->foreign('last_edit')->references('id')->on('account')->onDelete('cascade');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category', function (Blueprint $table) {
            $table->dropConstrainedForeignId('id_picture');
            $table->dropConstrainedForeignId('last_edit');
        });
        Schema::dropIfExists('category');
    }
};