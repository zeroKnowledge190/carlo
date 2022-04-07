<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('req_id_no')->length(12);
            $table->string('date_created')->length(40);
            $table->string('entity_name')->length(120);
            $table->string('full_name')->length(120);
            $table->string('job_title')->length(120);
            $table->string('company_name')->length(120);
            $table->string('email_address')->length(60);
			$table->text('body_summary');
			$table->string('location')->length(60);
			$table->string('request_type')->length(60);
			$table->string('others')->length(120);
			$table->string('priority')->length(60);
			$table->string('due_date')->length(40);
			$table->string('definition')->length(120);
			$table->string('req_status')->length(60);
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
        Schema::dropIfExists('requisitions');
    }
}
