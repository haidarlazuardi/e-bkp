<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReward extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared('CREATE TRIGGER add_reward AFTER INSERT ON tr_input_rewards
                        FOR EACH ROW BEGIN
                        update score_rewards
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
        DB::unprepared('DROP TRIGGER `insert_reward`');
    }
}
