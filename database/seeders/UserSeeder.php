<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Administrador',
                    'username' => 'admin',
                    'password' => Hash::make('123'),
                ],
                [
                    'name' => 'Analista',
                    'username' => 'analista',
                    'password' => Hash::make('123'),
                ]
            ]
        );
    }
}
