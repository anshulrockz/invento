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
            $table->integer('school_id');
            $table->integer('user_group');
            $table->tinyInteger('is_blocked');
            $table->string('name');
            $table->string('gender');
            $table->text('thumb');
            $table->text('avtar');
            $table->string('email', 191)->unique();
            $table->string('mobile');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->tinyInteger('deleted_at');
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
