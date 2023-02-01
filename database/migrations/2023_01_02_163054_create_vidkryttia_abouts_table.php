<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVidkryttiaAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vidkryttia_abouts', function (Blueprint $table) {
            $table->id();

            $table->text('title');
            $table->text('titleRU')->nullable();

            $table->string('subtitle1');
            $table->string('subtitle1RU')->nullable();

            $table->text('list1');

            $table->string('subtitle2');
            $table->string('subtitle2RU')->nullable();

            $table->text('list2');

            $table->string('video');

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
        Schema::dropIfExists('vidkryttia_abouts');
    }
}
