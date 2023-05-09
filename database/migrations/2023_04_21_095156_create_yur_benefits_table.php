<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYurBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yur_benefits', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('titleRU')->nullable();

            $table->text('text');
            $table->text('textRU')->nullable();

            $table->string('image');
            
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
        Schema::dropIfExists('yur_benefits');
    }
}
