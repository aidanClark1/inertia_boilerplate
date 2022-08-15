<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('team_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('app_user_id')->references('id')->on('app_users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('thread_id')->references('id')->on('threads')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('private_chats');
    }
}