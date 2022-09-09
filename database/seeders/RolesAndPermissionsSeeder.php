<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'crear_administradores']);
        Permission::create(['name' => 'crear_visores']);
        Permission::create(['name' => 'ver_informacion']);
        Permission::create(['name' => 'ver_reportes']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'visor']);
        $role->givePermissionTo('ver_informacion');

        // or may be done by chaining
        $role = Role::create(['name' => 'administrador'])
            ->givePermissionTo(['ver_informacion', 'ver_reportes']);

        $role = Role::create(['name' => 'super']);
        $role->givePermissionTo(Permission::all());

        User::find(1)->assignRole('super');
        User::find(2)->assignRole('administrador');
        User::find(3)->assignRole('visor');
    }
}
