<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'first_name' => 'Admin',
            'middle_initial' => 'Z',
            'last_name' => 'User',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
        ]);

        $user->syncRoles(['SuperAdmin']);
    }
}
