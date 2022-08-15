<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMemberImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_member_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_member_id')->references('id')->on('team_members')->onDelete('cascade')->onUpdate('cascade');
            $table->string('img_url');
            // Caption for the image, currently not being used
            $table->longText("caption")->nullable();
            // The notes for the image, currently not being used
            $table->longText("notes")->nullable();
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
        Schema::dropIfExists('team_member_images');
    }
}