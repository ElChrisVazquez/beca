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

        // estatus_estudiante
        DB::table('estatus_estudiante')->insert(
            [
                [
                    'id' => 1,
                    'nombre' => 'Inactivo',
                ],
                [
                    'id' => 2,
                    'nombre' => 'Activo',
                ]
            ]
        );

        // Plan Estudios
        DB::table('plan_estudios')->insert(
            [
                [
                    'nombre' => 'Semestre',
                    'modalidad' => 'Escolarizada',
                    'costo' => 2015.35,
                ],
                [
                    'nombre' => 'cuatrimestre',
                    'modalidad' => 'Escolarizada',
                    'costo' => 1250.30,
                ]
            ]
        );

        // Caarreras
        DB::table('carreras')->insert(
            [
                [
                    'nombre' => 'Arquitectura',
                    'plan_estudio_id' => 1,
                    'ciclos' => 8,
                ],
                [
                    'nombre' => 'Ciencias de la comunicación',
                    'plan_estudio_id' => 1,
                    'ciclos' => 8,
                ],
                [
                    'nombre' => 'Contaduría pública',
                    'plan_estudio_id' => 2,
                    'ciclos' => 10,
                ],
                [
                    'nombre' => 'Derecho',
                    'plan_estudio_id' => 1,
                    'ciclos' => 8,
                ],
                [
                    'nombre' => 'Ingeniería en Software',
                    'plan_estudio_id' => 1,
                    'ciclos' => 8,
                ],
            ]
        );

        // Estudiante
        DB::table('estudiantes')->insert(
            [
                [
                    'matricula' => 'VAVC881010',
                    'paterno' => 'Vazquez',
                    'materno' => 'Valdivia',
                    'nombre' => 'Christian Alan',
                    'fecha_nacimiento' => '1988-10-10',
                    'estatus_estudiante_id' => 2,
                    'carrera_id' => 5,
                ]
            ]
        );

        // Table c_entidad 
        $fileurls = fopen('database/data/c_entidad.csv', 'r');

        while (($row = fgetcsv($fileurls, 0, ',')) != FALSE) {
            DB::table('c_entidad')->insert(
                array(
                    'cd_ent' => $row[0],
                    'nb_entidad' => utf8_encode($row[1]),
                    'cd_ent_renapo' => $row[2],
                    'nb_ent' => utf8_encode($row[3])
                )
            );
        }

        // Table c_mun 
        $fileurls = fopen('database/data/c_mun.csv', 'r');

        while (($row = fgetcsv($fileurls, 0, ',')) != FALSE) {
            DB::table('c_mun')->insert(
                array(
                    'cve_mun_conca' => $row[0],
                    'nom_mun' => utf8_encode($row[1]),
                    'cve_ent' => $row[2]
                )
            );
        }

        // Table c_loc 
        $fileurls = fopen('database/data/c_loc.csv', 'r');

        while (($row = fgetcsv($fileurls, 0, ',')) != FALSE) {
            DB::table('c_loc')->insert(
                array(
                    'cve_loc_conca' => $row[0],
                    'nom_loc' => utf8_encode($row[1]),
                    'ambito' => $row[2],
                    'latitud' => $row[3],
                    'longitud' => $row[4],
                    'cve_mun_conca' => $row[5]
                )
            );
        }
    }
}
