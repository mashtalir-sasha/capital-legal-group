<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodatkoveFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podatkove_faqs', function (Blueprint $table) {
            $table->id();
            
            $table->text('question');
            $table->text('questionRU')->nullable();

            $table->text('answer');
            $table->text('answerRU')->nullable();

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
        Schema::dropIfExists('podatkove_faqs');
    }
}
