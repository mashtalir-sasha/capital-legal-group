<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDozAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doz_abouts', function (Blueprint $table) {
            $table->id();

            $table->text('title');
            $table->text('titleRU')->nullable();

            $table->text('text1');
            $table->text('text1RU')->nullable();

            $table->text('text2');
            $table->text('text2RU')->nullable();

            $table->string('image');

            $table->text('term_title');
            $table->text('term_titleRU')->nullable();
            $table->text('term_text');
            $table->text('term_textRU')->nullable();

            $table->text('price_title');
            $table->text('price_titleRU')->nullable();
            $table->text('price_text');
            $table->text('price_textRU')->nullable();

            $table->text('docs1')->nullable();
            $table->text('docs2')->nullable();

            $table->text('docs_note')->nullable();
            $table->text('docs_noteRU')->nullable();

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
        Schema::dropIfExists('doz_abouts');
    }
}
