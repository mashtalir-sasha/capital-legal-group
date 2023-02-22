<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_procedures', function (Blueprint $table) {
            $table->id();

            $table->text('item1');
            $table->text('item1RU')->nullable();

            $table->text('item2');
            $table->text('item2RU')->nullable();

            $table->text('item3');
            $table->text('item3RU')->nullable();

            $table->text('item4');
            $table->text('item4RU')->nullable();

            $table->text('item5');
            $table->text('item5RU')->nullable();

            $table->text('item6');
            $table->text('item6RU')->nullable();

            $table->text('note')->nullable();
            $table->text('noteRU')->nullable();

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
        Schema::dropIfExists('pos_procedures');
    }
}
