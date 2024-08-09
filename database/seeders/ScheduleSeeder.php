<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create([
            'created_by' => 2,
            'test_id' => 1,
            'schedule_time' => '2024-08-10 09:00:00',
            'user_ids' => json_encode([3])
        ]);
    }
}
