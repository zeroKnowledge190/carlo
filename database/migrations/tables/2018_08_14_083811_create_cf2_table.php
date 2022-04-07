<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCf2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cf2', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('pUser_Id');
			$table->string('pUserName');
			$table->string('pUserPassword');
			$table->string('pHospitalCode');
			$table->string('pHospitalEmail');
			$table->string('');
			$table->text('content');
			$table->string('price');
			$table->string('avatar')->default('task.jpg');
			$table->boolean('live')->default(0);
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
        Schema::dropIfExists('cf2');
    }
}
