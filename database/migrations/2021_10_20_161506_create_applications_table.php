<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('app_id_no')->length(12);
            $table->string('date_created')->length(40);
            $table->string('entity_name')->length(120);
            $table->string('subject')->length(120);
            $table->string('dear')->length(120);
			$table->string('application_status')->length(60);
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
        Schema::dropIfExists('applications');
    }
}
