<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("course_id")->references("id")->on("courses")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("title_ru");
            $table->string("title_kz");
            $table->string("subtitle_ru");
            $table->string("subtitle_kz");
            $table->string("desc_ru");
            $table->string("desc_kz");
            $table->string("link");
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
        Schema::dropIfExists('videos');
    }
}
