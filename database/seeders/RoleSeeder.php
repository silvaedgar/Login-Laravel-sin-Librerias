<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roladmin = Role::create(['name' => 'Admin']);
        $roluser = Role::create(['name' => 'User']);

        $roladmin->givePermissionTo(Permission::all()->pluck('id'));


        // Permission::create(['name' => 'Compras'])->syncRoles([$roladmin,$roluser]);
        // Permission::create(['name' => 'Ventas'])->syncRoles([$roladmin,$roluser]);
        // Permission::create(['name' => 'Almacen'])->syncRoles([$roladmin,$roluser]);

        // Permission::create(['name' => 'Usuarios'])->syncRoles([$roladmin]);

        //
    }
}
