<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVurAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vur_abouts', function (Blueprint $table) {
            $table->id();

            $table->text('title');
            $table->text('titleRU')->nullable();

            $table->text('item1')->nullable();
            $table->text('item1RU')->nullable();
            $table->text('list1')->nullable();

            $table->text('item2')->nullable();
            $table->text('item2RU')->nullable();
            $table->text('list2')->nullable();

            $table->text('item3')->nullable();
            $table->text('item3RU')->nullable();
            $table->text('list3')->nullable();

            $table->text('item4')->nullable();
            $table->text('item4RU')->nullable();
            $table->text('list4')->nullable();

            $table->text('item5')->nullable();
            $table->text('item5RU')->nullable();
            $table->text('list5')->nullable();

            $table->text('item6')->nullable();
            $table->text('item6RU')->nullable();
            $table->text('list6')->nullable();

            $table->string('video');

            $table->string('price_title');
            $table->string('price_titleRU')->nullable();
            $table->string('price_price');
            $table->string('price_priceRU')->nullable();
            $table->text('price_text');
            $table->text('price_textRU')->nullable();
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
        Schema::dropIfExists('vur_abouts');
    }
}
