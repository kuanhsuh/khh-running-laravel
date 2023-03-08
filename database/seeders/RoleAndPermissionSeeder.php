<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'create-events']);
        Permission::create(['name' => 'edit-events']);
        Permission::create(['name' => 'delete-events']);
        Permission::create(['name' => 'delete-users']);

        $adminRole = Role::create(['name' => 'Admin']);
        $adminRole->givePermissionTo([
            'create-events',
            'edit-events',
            'delete-events',
            'delete-users',
        ]);

    }
}
