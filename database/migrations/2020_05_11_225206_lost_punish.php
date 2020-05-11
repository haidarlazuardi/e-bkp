<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LostPunish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared('CREATE TRIGGER lost_punish AFTER DELETE ON tr_input_punishments
                        FOR EACH ROW BEGIN
                        update score_punishments
                        set totaly_score = totaly_score - OLD.score
                        WHERE
                        student_id = OLD.student_id; END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::unprepared('DROP TRIGGER `min_punish`');
    }
}
