<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\Permissions\RolesEnum;
use Database\Seeders\Permissions\PermissionsSeeder;
use Database\Seeders\Permissions\RolesSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'php2@firmtechsol.com',
            'email_verified_at' => null,
        ])->assignRole(RolesEnum::SUPER_ADMIN);
    }
}
