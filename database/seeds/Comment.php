<?php

use Illuminate\Database\Seeder;

class Comment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'hotel_id' => '1',
            'comment' => 'Yes Hotel Rome offers a stylish stay in the heart of Rome city centre.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '1',
            'comment' => 'Yes Hotel Rome offers a stylish stay in the heart of Rome city centre.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '2',
            'comment' => 'Yes Hotel Rome offers a stylish stay in the heart of Rome city centre.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '2',
            'comment' => 'Yes Hotel Rome offers a stylish stay in the heart of Rome city centre.'
        ]);
    }
}
