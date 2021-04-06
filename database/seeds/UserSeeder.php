<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for($i = 1; $i<1; $i++){
            DB::table('users')->insert([
                'name' => 'kien123456',
                'email' => 'hkjadbajsh@gmail.com',
                'password' => 123456,
            ]);
//        }
    }
}
