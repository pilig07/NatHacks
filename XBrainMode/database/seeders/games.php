<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class games extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert(['description'=>'Scroll-Side Game',
    'genre'=>'Arcade','author'=>'Pilar Garcia','tittle'=>'flappy']);
    }
}
