<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZakryttiaTarifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zakryttia_tarifs', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('titleRU')->nullable();

            $table->text('offer');
            $table->text('offerRU')->nullable();

            $table->text('accept');
            $table->text('acceptRU')->nullable();

            $table->string('term');
            $table->string('termRU')->nullable();

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
        Schema::dropIfExists('zakryttia_tarifs');
    }
}
