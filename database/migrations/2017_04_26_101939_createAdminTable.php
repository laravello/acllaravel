<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();;
            $table->string('first_name')->nullable();;
            $table->string('zip')->nullable();;
            $table->string('street')->nullable();;
            $table->string('place')->nullable();;
            $table->string('phone')->nullable();;
            $table->string('country')->nullable();;
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
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
        Schema::dropIfExists('Admins');
    }
}
