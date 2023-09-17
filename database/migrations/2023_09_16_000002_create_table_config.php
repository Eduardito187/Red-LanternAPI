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
        Schema::create('config_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('value')->nullable();
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
        Schema::dropIfExists('config_data', function (Blueprint $table) {
            $table->dropConstrainedForeignId('last_edit');
        });
        Schema::dropIfExists('config_data');
    }
};