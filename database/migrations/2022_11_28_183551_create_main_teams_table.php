<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_teams', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('nameRU')->nullable();

            $table->string('position');
            $table->string('positionRU')->nullable();

            $table->string('number')->nullable();
            $table->string('numberRU')->nullable();

            $table->string('text');
            $table->string('textRU')->nullable();

            $table->string('image');

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
        Schema::dropIfExists('main_teams');
    }
}
