<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('to')->nullable();
            $table->string('return_email');
            $table->integer('waiting_period')->default(0);
            $table->integer('delay')->default(0);
            $table->enum('status', ['stopped', 'running','not running', 'finished', 'aborted'])->default('not running');
            $table->string('message');
            $table->timestamp('last_sent_at');
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
        Schema::dropIfExists('tasks');
    }
}
