<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrInputPunishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_input_punishments', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->integer('student_id');
            $table->integer('punishment_id');
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
        Schema::dropIfExists('tr_input_punishments');
    }
}
