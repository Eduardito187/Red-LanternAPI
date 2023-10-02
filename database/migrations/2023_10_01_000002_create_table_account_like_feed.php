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
        Schema::create('account_like_feed', function (Blueprint $table) {
            $table->boolean('like');

            $table->unsignedBigInteger('id_account')->nullable();
            $table->foreign('id_account')->references('id')->on('account')->onDelete('cascade');

            $table->unsignedBigInteger('id_feed')->nullable();
            $table->foreign('id_feed')->references('id')->on('feed')->onDelete('cascade');
            
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
        Schema::dropIfExists('account_like_feed', function (Blueprint $table) {
            $table->dropConstrainedForeignId('id_account');
            $table->dropConstrainedForeignId('id_feed');
        });
        Schema::dropIfExists('account_like_feed');
    }
};