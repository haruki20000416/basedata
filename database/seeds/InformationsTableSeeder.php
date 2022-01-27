<?php

use Illuminate\Database\Seeder;

class InformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informations')->insert([
            'place'=>'naraha',
            'opponent'=>'yamagata',
            'day'=>'2022-01-24',
            
            
            
            ]);
    }
}
