<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DeparmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deparments = [
            [
                'name' => 'Web Development',
            ], [
                'name' => 'Application Development',
            ],
            [
                'name' => 'IT Management',
            ],
            [
                'name' => 'Accounts Management',
            ],
            [
                'name' => 'Support Management',
            ],
            [
                'name' => 'Marketing',
            ],
        ];
        foreach ($deparments as $department) {
            Department::create($department);
        }
    }

}
