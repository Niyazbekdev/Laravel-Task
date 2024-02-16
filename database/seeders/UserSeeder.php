<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
