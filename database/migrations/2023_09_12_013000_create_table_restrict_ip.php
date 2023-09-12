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
        Schema::create('restrict_ip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_ip')->nullable();
            $table->foreign('id_ip')->references('id')->on('ip')->onDelete('cascade');
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
        Schema::dropIfExists('restrict_ip', function (Blueprint $table) {
            $table->dropConstrainedForeignId('id_ip');
        });
        Schema::dropIfExists('restrict_ip');
    }
};