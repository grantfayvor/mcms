<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username', 100)->unique();
            $table->string('first_name', 55);
            $table->string('last_name', 55);
            $table->string('department', 120);
            $table->enum('account_type', ['Lecturer', 'Student']);
            $table->string('password');
            $table->string('institution', 120);
            $table->string('image_location');
            $table->rememberToken();
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
