<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGospLidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gosp_liders', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('nameRU')->nullable();

            $table->string('position');
            $table->string('positionRU')->nullable();

            $table->string('photo');

            $table->string('number');
            $table->string('numberRU')->nullable();

            $table->string('text');
            $table->string('textRU')->nullable();

            $table->text('study')->nullable();
            $table->text('studyRU')->nullable();

            $table->text('practic')->nullable();
            $table->text('practicRU')->nullable();

            $table->text('sphere')->nullable();
            $table->text('sphereRU')->nullable();

            $table->string('image')->nullable();
            
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
        Schema::dropIfExists('gosp_liders');
    }
}
