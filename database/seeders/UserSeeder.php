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
                    'name' => 'Super',
                    'username' => 'super',
                    'password' => Hash::make('123'),
                ],
                [
                    'name' => 'Administrador',
                    'username' => 'admin',
                    'password' => Hash::make('123'),
                ],
                [
                    'name' => 'Visor',
                    'username' => 'visor',
                    'password' => Hash::make('123'),
                ]
            ]
        );
    }
}
