<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrInputRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_input_rewards', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->integer('student_id');
            $table->integer('reward_id');
            $table->integer('score');
            $table->string('spectator');
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
        Schema::dropIfExists('tr_input_rewards');
    }
}
