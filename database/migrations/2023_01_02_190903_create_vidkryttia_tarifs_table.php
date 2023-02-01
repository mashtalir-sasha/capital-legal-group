<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVidkryttiaTarifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vidkryttia_tarifs', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('nameRU')->nullable();

            $table->string('title');
            $table->string('titleRU')->nullable();

            $table->text('text');
            $table->text('textRU')->nullable();

            $table->string('price');

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
        Schema::dropIfExists('vidkryttia_tarifs');
    }
}
