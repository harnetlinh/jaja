<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAnsweredSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_answered_surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('answered_survey_id');
            $table->unsignedBigInteger('option_id');
            $table->tinyInteger('times');
            $table->timestamps();
            
            $table->foreign('option_id')
            ->references('id')
            ->on('options')
            ->onDelete('cascade');
            $table->foreign('answered_survey_id')
            ->references('id')
            ->on('answered_surveys')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_answered_surveys');
    }
}
