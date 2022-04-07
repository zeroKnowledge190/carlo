<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSparejamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sparejams', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->integer('helper_id');
			$table->string('tasker_name');
			$table->string('helper_name');
			$table->string('title');
			$table->string('category');
			$table->string('post_location');
			$table->string('task_status');
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
        Schema::dropIfExists('sparejams');
    }
}
