<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'view roles'],
            ['name' => 'create role'],
            ['name' => 'delete role'],
            ['name' => 'add permissions'],

            ['name' => 'view permissions'],
            ['name' => 'create permission'],
            ['name' => 'delete permission'],

            ['name' => 'view users'],
            ['name' => 'edit user'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
