<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Nivel academico
        DB::table('c_niveles_academicos')->insert(
            [
                [
                    'nombre' => 'Educación media superior',
                ],
                [
                    'nombre' => 'Licenciatura',
                ],
                [
                    'nombre' => 'Posgrado',
                ],
                [
                    'nombre' => 'Educación contonua',
                ],
            ]
        );

        // Nivel academico
        DB::table('c_parentescos')->insert(
            [
                ['nombre' => ' Padre'],
                ['nombre' => ' Madre'],
                ['nombre' => ' Hermano'],
                ['nombre' => ' Hermana'],
                ['nombre' => ' Hijo'],
                ['nombre' => ' Hija'],
                ['nombre' => ' Abuelo'],
                ['nombre' => ' Abuela'],
                ['nombre' => ' Nieto'],
                ['nombre' => ' Nieta'],
                ['nombre' => ' Esposo, Cónyuge'],
                ['nombre' => ' Esposa, Cónyuge'],
                ['nombre' => ' Tío'],
                ['nombre' => ' Tía'],
                ['nombre' => ' Sobrino'],
                ['nombre' => ' Sobrina'],
                ['nombre' => ' Primo'],
                ['nombre' => ' Prima'],
                ['nombre' => ' Bisabuelo'],
                ['nombre' => ' Bisabuela'],
                ['nombre' => ' Bisnieto'],
                ['nombre' => ' Bisnieta'],
                ['nombre' => ' Tatarabuelo'],
                ['nombre' => ' Tatarabuela'],
                ['nombre' => ' Tataranieto'],
                ['nombre' => ' Tataranieta'],
                ['nombre' => ' Suegro'],
                ['nombre' => ' Suegra'],
                ['nombre' => ' Consuegro'],
                ['nombre' => ' Consuegra'],
                ['nombre' => ' Yerno'],
                ['nombre' => ' Nuera'],
                ['nombre' => ' Cuñado'],
                ['nombre' => ' Cuñada'],
                ['nombre' => ' Concuño'],
                ['nombre' => ' Concuña'],
                ['nombre' => ' Padrastro'],
                ['nombre' => ' Madrastra'],
                ['nombre' => ' Hijastro'],
                ['nombre' => ' Hijastra'],
                ['nombre' => ' Hermanastro'],
                ['nombre' => ' Hermanastra'],
                ['nombre' => ' Hijo adoptivo'],
                ['nombre' => ' Hija adoptiva'],
                ['nombre' => ' Concubino, compañero'],
                ['nombre' => ' Concubina, compañera'],
                ['nombre' => ' Amante, Amasio, Querido'],
                ['nombre' => ' Amante, Amasia, Querida'],
                ['nombre' => ' Novio'],
                ['nombre' => ' Novia'],
                ['nombre' => ' Ex esposo'],
                ['nombre' => ' Ex esposa'],
                ['nombre' => ' Padrino'],
                ['nombre' => ' Madrina'],
                ['nombre' => ' Ahijado'],
                ['nombre' => ' Ahijada'],
                ['nombre' => ' Compadre'],
                ['nombre' => ' Comadre'],
                ['nombre' => ' Tutor'],
                ['nombre' => ' Tutora'],
                ['nombre' => ' Trabajador doméstico'],
                ['nombre' => ' Trabajadora doméstica'],
                ['nombre' => ' Otro pariente del trabajador doméstico'],
                ['nombre' => ' Huésped'],
                ['nombre' => ' Otro pariente del huésped'],
                ['nombre' => ' Conocido'],
                ['nombre' => ' Vecino'],
                ['nombre' => ' Amigo'],
                ['nombre' => ' Amiga'],
                ['nombre' => ' Otro familiar'],
                ['nombre' => ' Sin parentesco'],
                ['nombre' => ' Ninguno'],
                ['nombre' => ' No aplica'],
                ['nombre' => ' No especificado'],
            ]
        );
    }
}
