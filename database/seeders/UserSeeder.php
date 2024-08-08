<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Developer',
                'email' => 'developer@mail.com',
                'password' => bcrypt('secret'),
                'role_id' => 1
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('secret'),
                'role_id' => 2
            ],
            [
                'name' => 'Student',
                'email' => 'student@mail.com',
                'password' => bcrypt('secret'),
                'role_id' => 3
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
