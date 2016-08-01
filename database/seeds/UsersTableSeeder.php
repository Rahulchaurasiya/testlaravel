<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'john',
            'email' => 'john@gmail.com',
            'password' => bcrypt('doe'),
        ]);
    }
}
