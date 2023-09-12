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
        Schema::create('account_login', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->longText('password');
            $table->boolean('status');
            $table->unsignedBigInteger('id_account')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
            $table->foreign('id_account')->references('id')->on('account')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_login', function (Blueprint $table) {
            $table->dropConstrainedForeignId('id_account');
        });
        Schema::dropIfExists('account_login');
    }
};