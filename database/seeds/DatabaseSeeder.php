<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name' => str_random(10),
            'date' => time(),
            'location' => str_random(10),
            'host' => str_random(10),
        ]);
    }
}
