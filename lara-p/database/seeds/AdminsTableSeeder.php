<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
            'name' => Str::random(10),
            'email' => Str::random(10),
            'password' => Str::random(8)
            ],
            [
            'name' => Str::random(10),
            'email' => Str::random(10),
            'password' => Str::random(8)
            ],
            [
            'name' => Str::random(10),
            'email' => Str::random(10),
            'password' => Str::random(8)
            ],
        ]);
    }
}
