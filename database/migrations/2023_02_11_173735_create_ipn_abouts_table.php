<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpnAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipn_abouts', function (Blueprint $table) {
            $table->id();

            $table->text('title');
            $table->text('titleRU')->nullable();

            $table->text('subtitle');
            $table->text('subtitleRU')->nullable();

            $table->text('item1')->nullable();
            $table->text('item1RU')->nullable();
            $table->text('item2')->nullable();
            $table->text('item2RU')->nullable();
            $table->text('item3')->nullable();
            $table->text('item3RU')->nullable();
            $table->text('item4')->nullable();
            $table->text('item4RU')->nullable();
            $table->text('item5')->nullable();
            $table->text('item5RU')->nullable();
            $table->text('item6')->nullable();
            $table->text('item6RU')->nullable();
            $table->text('item7')->nullable();
            $table->text('item7RU')->nullable();
            $table->text('item8')->nullable();
            $table->text('item8RU')->nullable();

            $table->string('image');

            $table->text('term_title');
            $table->text('term_titleRU')->nullable();
            $table->text('term_text');
            $table->text('term_textRU')->nullable();

            $table->text('price_title');
            $table->text('price_titleRU')->nullable();
            $table->text('price_text');
            $table->text('price_textRU')->nullable();

            $table->text('docs')->nullable();

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
        Schema::dropIfExists('ipn_abouts');
    }
}
