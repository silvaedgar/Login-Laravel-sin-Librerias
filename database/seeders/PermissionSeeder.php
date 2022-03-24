<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = ['users.index','users.create','users.edit','users.destroy',
            'roles.index','roles.create','roles.edit','roles.destroy','compras','ventas','almacen'];

        foreach ($permissions as $permission) {

            Permission::create ([
                'name' => $permission
            ]);
        }
        //
    }
}
