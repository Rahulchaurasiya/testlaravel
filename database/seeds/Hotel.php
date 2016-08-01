<?php

use Illuminate\Database\Seeder;

class Hotel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'name' => str_random(10),
        ]);
        DB::table('hotels')->insert([
            'name' => str_random(10),
        ]);
        DB::table('hotels')->insert([
            'name' => str_random(10),
        ]);
        DB::table('hotels')->insert([
            'name' => str_random(10),
        ]);
    }
}
