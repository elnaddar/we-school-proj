<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(["name"=> "create post"]);
        Permission::create(["name"=> "update post"]);
        Permission::create(["name"=> "read post"]);
        Permission::create(["name"=> "delete post"]);

        $role = Role::create(["name"=> "admin"]);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(["name"=> "reader"]);
        $role->givePermissionTo("read post");
    }
}
