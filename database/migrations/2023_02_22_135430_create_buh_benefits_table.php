<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuhBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buh_benefits', function (Blueprint $table) {
            $table->id();

            $table->text('title');
            $table->text('titleRU')->nullable();

            $table->text('text');
            $table->text('textRU')->nullable();

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
        Schema::dropIfExists('buh_benefits');
    }
}
