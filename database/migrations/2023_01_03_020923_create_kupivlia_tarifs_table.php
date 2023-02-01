<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKupivliaTarifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kupivlia_tarifs', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('titleRU')->nullable();

            $table->string('subtitle');
            $table->string('subtitleRU')->nullable();

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
        Schema::dropIfExists('kupivlia_tarifs');
    }
}
