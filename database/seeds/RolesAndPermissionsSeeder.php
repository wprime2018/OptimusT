<?php

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

        // permissions load
        Permission::create(['name' => 'create load']);
        Permission::create(['name' => 'edit load']);
        Permission::create(['name' => 'delete load']);
        Permission::create(['name' => 'publish load']);
        Permission::create(['name' => 'unpublish load']);
        // permissions driver
        Permission::create(['name' => 'create driver']);
        Permission::create(['name' => 'edit driver']);
        Permission::create(['name' => 'delete driver']);
        Permission::create(['name' => 'publish driver']);
        Permission::create(['name' => 'unpublish driver']);

        // create roles and assign created permissions

        // create roles and permissions load
        $role = Role::create(['name' => 'load user'])
            ->givePermissionTo(['create load', 'publish load']);
        $role = Role::create(['name' => 'load moderator'])
            ->givePermissionTo(['create load', 'edit load', 'publish load']);
        $role = Role::create(['name' => 'load admin'])
            ->givePermissionTo(['create load', 'edit load', 'delete load', 'publish load', 'unpublish load']);

        // create roles and permissions driver
        $role = Role::create(['name' => 'driver user'])
            ->givePermissionTo(['create driver', 'publish driver']);
        $role = Role::create(['name' => 'driver moderator'])
            ->givePermissionTo(['create driver', 'edit driver', 'publish driver']);
        $role = Role::create(['name' => 'driver admin'])
            ->givePermissionTo(['create driver', 'edit driver', 'delete driver', 'publish driver', 'unpublish driver']);

        // create roles and permissions manager load's and driver's
        $role = Role::create(['name' => 'manager user'])
            ->givePermissionTo(['create driver', 'publish driver', 'create load', 'publish load']);
        $role = Role::create(['name' => 'manager moderator'])
            ->givePermissionTo(['create driver', 'edit driver', 'publish driver', 'create load', 'edit load', 'publish load']);
        $role = Role::create(['name' => 'manager admin'])
            ->givePermissionTo(['create driver', 'edit driver', 'delete driver', 'publish driver', 'unpublish driver', 'create load', 'edit load', 'delete load', 'publish load', 'unpublish load']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
