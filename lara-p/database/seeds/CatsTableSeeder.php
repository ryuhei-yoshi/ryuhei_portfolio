<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

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
                'admin_id' => 1,
            ],
            [
                'title' => Str::random(10),
                'area' => Str::random(10),
                'adress' => Str::random(10),
                'category' => Str::random(10),
                'image_url' => Str::random(10),
                'old' => 5,
                'admin_id' => 1,
            ],
            [
                'title' => Str::random(10),
                'area' => Str::random(10),
                'adress' => Str::random(10),
                'category' => Str::random(10),
                'image_url' => Str::random(10),
                'old' => 5,
                'admin_id' => 1,
            ],
            [
                'title' => Str::random(10),
                'area' => Str::random(10),
                'adress' => Str::random(10),
                'category' => Str::random(10),
                'image_url' => Str::random(10),
                'old' => 5,
                'admin_id' => 2,
            ],
        ]);
    }
}
