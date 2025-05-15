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
            $table->id();//variable id incrementable y de tipo númerico
            $table->string('name');//tipo string soporta 255 caracteres
            $table->string('email')->unique();//crear variable de tipo string y unique: que no exista dos emails iguales 
            $table->timestamp('email_verified_at')->nullable();//crear fecha y nullable que puede ser nulo
            $table->string('password');
            $table->rememberToken();//token de 100 caracteres
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();// crear creat_at y update at
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
