<?php

namespace Database\Seeders;

use App\Models\Score;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scores = [
            [
                'test_id' => 1,
                'question_category_id' => 1,
                'user_id' => 3,
                'score' => 25
            ],
            [
                'test_id' => 1,
                'question_category_id' => 2,
                'user_id' => 3,
                'score' => 25
            ],
            [
                'test_id' => 1,
                'question_category_id' => 3,
                'user_id' => 3,
                'score' => 50
            ],
        ];

        foreach ($scores as $score) {
            Score::create($score);
        }
    }
}
