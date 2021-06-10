<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("category_id")->references("id")->on("categories")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("title_ru");
            $table->string("title_kz");
            $table->string("subtitle_ru");
            $table->string("subtitle_kz");
            $table->string("desc_ru");
            $table->string("desc_kz");
            $table->string("alias");
            $table->string("img");
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
        Schema::dropIfExists('courses');
    }
}
