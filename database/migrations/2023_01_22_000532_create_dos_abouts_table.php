<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dos_abouts', function (Blueprint $table) {
            $table->id();

            $table->text('title');
            $table->text('titleRU')->nullable();

            $table->text('list')->nullable();

            $table->string('video');

            $table->string('price_title');
            $table->string('price_titleRU')->nullable();
            $table->string('price_price');
            $table->string('price_priceRU')->nullable();
            $table->text('price_note')->nullable();
            $table->text('price_noteRU')->nullable();

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
        Schema::dropIfExists('dos_abouts');
    }
}
