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
        Schema::create('city_category', function (Blueprint $table) {
            $table->unsignedBigInteger('id_city')->nullable();
            $table->foreign('id_city')->references('id')->on('city')->onDelete('cascade');
            $table->unsignedBigInteger('id_category')->nullable();
            $table->foreign('id_category')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_category', function (Blueprint $table) {
            $table->dropConstrainedForeignId('id_category');
            $table->dropConstrainedForeignId('id_city');
        });
        Schema::dropIfExists('city_category');
    }
};