<?php

namespace Database\Seeders\Permissions;

use App\Enums\Permissions\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = RolesEnum::getValues();

        foreach ($roles as $key => $role) Role::create(['name' => $role]);
    }
}
