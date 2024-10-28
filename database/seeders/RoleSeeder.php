<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'SuperAdmin',
            ],
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'HumanResource',
            ],
            [
                'name' => 'Accounting',
            ],
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role['name'],
            ]);
        }
    }
}
