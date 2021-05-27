<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cats')->insert([
            [
                'title' => Str::random(10),
                'area' => Str::random(10),
                'adress' => Str::random(10),
                'category' => Str::random(10),
                'image_url' => Str::random(10),
                'old' => 5,
                'user_id' => 2,
            ],
            [
                'title' => Str::random(10),
                'area' => Str::random(10),
                'adress' => Str::random(10),
                'category' => Str::random(10),
                'image_url' => Str::random(10),
                'old' => 5,
                'user_id' => 2,
            ],
            [
                'title' => Str::random(10),
                'area' => Str::random(10),
                'adress' => Str::random(10),
                'category' => Str::random(10),
                'image_url' => Str::random(10),
                'old' => 5,
                'user_id' => 3,
            ],
            [
                'title' => Str::random(10),
                'area' => Str::random(10),
                'adress' => Str::random(10),
                'category' => Str::random(10),
                'image_url' => Str::random(10),
                'old' => 5,
                'user_id' => 1,
            ],
        ]);
    }
}
