<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionForDeveloper = [
            1,2,3,4,5,6,7,8,9
        ];

        $permissionForAdmin = [];

        $permissionForStudent = [];
    }
}
