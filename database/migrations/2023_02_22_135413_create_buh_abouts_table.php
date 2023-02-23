<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuhAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buh_abouts', function (Blueprint $table) {
            $table->id();

            $table->text('text1');
            $table->text('text1RU')->nullable();

            $table->text('text2')->nullable();
            $table->text('text2RU')->nullable();

            $table->text('image');

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
        Schema::dropIfExists('buh_abouts');
    }
}
