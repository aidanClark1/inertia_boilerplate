<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // references role table and looks for id in role table
            $table->foreignId('role_id');
            $table->enum("user_role", ["AppUser", "TeamUser", "Admin"])->nullable();  
            $table->boolean('remember')->default(false);
            $table->integer('account_id')->index()->nullable();
            $table->boolean('owner')->default(false);
            $table->string('photo_path', 100)->nullable();
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->decimal('billing_rate', 10, 2)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('is_approved', ['approved', 'pending', 'declined'])->default('pending');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}