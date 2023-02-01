<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_numbers', function (Blueprint $table) {
            $table->id();

            $table->string('title1');
            $table->string('title1RU')->nullable();
            $table->string('text1');
            $table->string('text1RU')->nullable();

            $table->string('title2');
            $table->string('title2RU')->nullable();
            $table->string('text2');
            $table->string('text2RU')->nullable();

            $table->string('title3');
            $table->string('title3RU')->nullable();
            $table->string('text3');
            $table->string('text3RU')->nullable();

            $table->string('title4');
            $table->string('title4RU')->nullable();
            $table->string('text4');
            $table->string('text4RU')->nullable();

            $table->string('title5');
            $table->string('title5RU')->nullable();
            $table->string('text5');
            $table->string('text5RU')->nullable();

            $table->string('title6');
            $table->string('title6RU')->nullable();
            $table->string('text6');
            $table->string('text6RU')->nullable();

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
        Schema::dropIfExists('main_numbers');
    }
}
