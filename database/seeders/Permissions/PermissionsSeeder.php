<?php

namespace Database\Seeders\Permissions;

use App\Helpers\GlobalHelpers;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissionsByRoutes = GlobalHelpers::getPermissionsByRoutes();

        foreach ($permissionsByRoutes as $key => $permission) Permission::firstOrCreate(['name' => $permission]);
    }
}
