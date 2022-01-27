<?php

use Illuminate\Database\Seeder;

class PithcersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pichers')->insert([
            'uniname' => 'fukushimauni',
            'pichername' => 'user1',
            'handedness'=> 'right',
            'quick' => 1.12,
            
            
        
            
            
            ]);
    }
}
