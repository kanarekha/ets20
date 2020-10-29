<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFilm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->integer('film_id')->unsigned()->autoIncrement();
            $table->string('title', 50);
            $table->string('year', 4);
            $table->string('synopsis', 200);
            $table->string('country', 50);
            $table->string('directors', 50);
            $table->string('actors', 50);
            $table->decimal('rating', 4, 2);
            $table->integer('duration');
            $table->string('poster', 50);
            $table->string('type', 50);
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
        Schema::dropIfExists('film');
    }
}
