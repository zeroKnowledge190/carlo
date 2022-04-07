<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSparejobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sparejobs', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->string('tasker_name');
			$table->string('title');
			$table->string('category');
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
        Schema::dropIfExists('sparejobs');
    }
}
