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
            $table->bigIncrements("id");
            $table->integer("is_admin")->default(0);
            $table->string('name');
            $table->string('surname');
            $table->string('middlename')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('work',500);
            $table->string("birthday");
            $table->string("city");
            $table->json("skills");
            $table->text("about");
            $table->integer('email_verified')->default(0);
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
        Schema::dropIfExists('users');
    }
}