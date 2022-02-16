<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([

            'batter' => 'left',
            'inning' => 6,
            'outcount' => 0,
            'count' => 1,
            'ballspecies' => 'straight',
            'speed' => 132,
            'result' => 'strike',
            'course' =>9,
            'picher_id'=> 1,
            'information_id'=> 1,
        ]);
    }
}
