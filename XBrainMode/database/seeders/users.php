<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pilar',
            'email' => 'pgarciad@ualberta.ca',
            'password' => bcrypt('123456789'),
            'idRol' => '2'
        ]);
    }
}
