<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('survey_id_no')->length(12);
            $table->string('date_created')->length(40);
            $table->string('intention')->length(120);
            $table->string('question1')->length(120);
            $table->string('question2')->length(120);
            $table->string('question3')->length(120);
            $table->string('question4')->length(120);
            $table->string('question5')->length(120);
			$table->string('survey_status')->length(60);
            $table->string('created_by')->length(90);
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
        Schema::dropIfExists('surveys');
    }
}
