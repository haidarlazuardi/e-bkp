<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPunish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
                DB::unprepared('CREATE TRIGGER add_punishment AFTER INSERT ON tr_input_punishments
                        FOR EACH ROW BEGIN
                        update score_punishments
                        set totaly_score = totaly_score + NEW.score
                        WHERE
                        student_id = NEW.student_id; END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::unprepared('DROP TRIGGER `insert_punishment`');
    }
}
