<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('vs');
            $table->boolean('is_home');
            $table->integer('home_score');
            $table->integer('away_score');
            $table->enum('result', ['Win', 'Loss', 'Draw']);
            $table->longtext('description');
            $table->string('date');
            $table->string('time');
            $table->string('address');
            $table->string('img_url')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('results');
    }
}