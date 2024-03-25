<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
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
            $randomRecordId = Department::select("id")->inRandomOrder()->first();
            Designation::create([
                'department_id' => $randomRecordId->id,
                'name' => $department['name'],
            ]);
        }
    }
}
