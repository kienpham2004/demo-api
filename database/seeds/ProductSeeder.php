<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<100; $i++){
            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10).'@gmail.com',
            ]);
        }
    }
}
