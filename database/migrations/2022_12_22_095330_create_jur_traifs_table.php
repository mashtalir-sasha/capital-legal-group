<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurTraifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jur_traifs', function (Blueprint $table) {
            $table->id();

            $table->text('text1');
            $table->text('text1RU')->nullable();

            $table->text('text2')->nullable();
            $table->text('text2RU')->nullable();

            $table->text('table')->nullable();

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
        Schema::dropIfExists('jur_traifs');
    }
}
