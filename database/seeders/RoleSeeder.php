<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roles = [
            [
                "name" => "Super Admin",
            ], [
                "name" => "Admin",
            ],
            [
                "name" => "Manager",
            ],
            [
                "name" => "HR",
            ],
            [
                "name" => "Team Lead",
            ],
            [
                "name" => "Employee",
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

    }
}
