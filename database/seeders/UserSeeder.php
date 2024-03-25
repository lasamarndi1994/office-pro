<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password = "$2y$10$7u/vl5lAr9cKlzCOH/uqIudHD0eN7PE0CyegTtF00aXwvYrUGd3L6";

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => "Lasa",
            'last_name' => "Marndi",
            'user_id' => rand("100000", '999999'),
            'phone_number' => rand("100000", '999999'),
            'email' => "lasa@gmail.com",
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

    }
}
