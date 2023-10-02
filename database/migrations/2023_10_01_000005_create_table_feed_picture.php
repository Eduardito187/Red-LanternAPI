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
        Schema::create('feed_picture', function (Blueprint $table) {
            $table->integer('sort');

            $table->unsignedBigInteger('id_account')->nullable();
            $table->foreign('id_account')->references('id')->on('account')->onDelete('cascade');

            $table->unsignedBigInteger('id_feed')->nullable();
            $table->foreign('id_feed')->references('id')->on('feed')->onDelete('cascade');
            
            $table->unsignedBigInteger('id_picture')->nullable();
            $table->foreign('id_picture')->references('id')->on('picture')->onDelete('cascade');
            
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
        Schema::dropIfExists('feed_picture', function (Blueprint $table) {
            $table->dropConstrainedForeignId('id_account');
            $table->dropConstrainedForeignId('id_feed');
            $table->dropConstrainedForeignId('id_picture');
        });
        Schema::dropIfExists('feed_picture');
    }
};