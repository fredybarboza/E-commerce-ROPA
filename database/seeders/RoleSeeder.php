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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Employee']);
        $role3 = Role::create(['name' => 'Customer']);

        //Permission list
        Permission::create(['name' => 'admin.dashboard']);
        Permission::create(['name' => 'admin.users']);

        $role1->givePermissionTo([
            'admin.dashboard',
            'admin.users',
        ]);

        $role2->givePermissionTo([
            'admin.dashboard',
        ]);
    }
}
