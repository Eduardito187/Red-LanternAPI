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
        Schema::create('feed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('url');

            $table->boolean('enable_comments');
            $table->bigInteger('comments');

            $table->boolean('enable_likes');
            $table->bigInteger('likes');

            $table->boolean('enable_shareds');
            $table->bigInteger('shareds');

            $table->longText('body')->nullable();
            
            $table->unsignedBigInteger('id_account')->nullable();
            $table->foreign('id_account')->references('id')->on('account')->onDelete('cascade');
            
            $table->unsignedBigInteger('id_city')->nullable();
            $table->foreign('id_city')->references('id')->on('city')->onDelete('cascade');
            
            $table->unsignedBigInteger('id_category')->nullable();
            $table->foreign('id_category')->references('id')->on('category')->onDelete('cascade');
            
            $table->unsignedBigInteger('id_type_feed')->nullable();
            $table->foreign('id_type_feed')->references('id')->on('type_feed')->onDelete('cascade');

            $table->boolean('status');
            $table->boolean('premium')->nullable();
            $table->decimal('quality', 10, 2);

            $table->timestamp('publish_at')->nullable();
            $table->timestamp('disabled_at')->nullable();
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
        Schema::dropIfExists('feed', function (Blueprint $table) {
            $table->dropConstrainedForeignId('id_account');
            $table->dropConstrainedForeignId('id_city');
            $table->dropConstrainedForeignId('id_category');
            $table->dropConstrainedForeignId('type_feed');
        });
        Schema::dropIfExists('feed');
    }
};