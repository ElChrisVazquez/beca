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
        Permission::create(['name' => 'crear_usuarios']);
        Permission::create(['name' => 'ver_informacion']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'Admin']);
        $role->givePermissionTo('crear_usuarios');

        // or may be done by chaining
        $role = Role::create(['name' => 'Analista']);
        $role->givePermissionTo('crear_usuarios');

        User::find(1)->assignRole('Admin');
        User::find(2)->assignRole('Analista');
    }
}
