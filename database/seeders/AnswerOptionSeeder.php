<?php

namespace Database\Seeders;

use App\Models\AnswerOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            [
                'question_id' => 1,
                'option_text' => 'His research project',
                'is_correct' => 1
            ],
            [
                'question_id' => 1,
                'option_text' => 'His vacation',
                'is_correct' => 0
            ],
            [
                'question_id' => 1,
                'option_text' => 'His new job',
                'is_correct' => 0
            ],
            [
                'question_id' => 1,
                'option_text' => 'His family',
                'is_correct' => 0
            ],

            [
                'question_id' => 2,
                'option_text' => 'To the conference',
                'is_correct' => 1
            ],
            [
                'question_id' => 2,
                'option_text' => 'To the market',
                'is_correct' => 0
            ],
            [
                'question_id' => 2,
                'option_text' => 'To his office',
                'is_correct' => 0
            ],
            [
                'question_id' => 2,
                'option_text' => 'To his home',
                'is_correct' => 0
            ],

            [
                'question_id' => 3,
                'option_text' => '3:00 PM',
                'is_correct' => 1
            ],
            [
                'question_id' => 3,
                'option_text' => '9:00 AM',
                'is_correct' => 0
            ],
            [
                'question_id' => 3,
                'option_text' => '12:00 PM',
                'is_correct' => 0
            ],
            [
                'question_id' => 3,
                'option_text' => '5:00 PM',
                'is_correct' => 0
            ],

            [
                'question_id' => 4,
                'option_text' => 'Environmental issues',
                'is_correct' => 1
            ],
            [
                'question_id' => 4,
                'option_text' => 'Sports',
                'is_correct' => 0
            ],
            [
                'question_id' => 4,
                'option_text' => 'Technology',
                'is_correct' => 0
            ],
            [
                'question_id' => 4,
                'option_text' => 'Education',
                'is_correct' => 0
            ],

            [
                'question_id' => 5,
                'option_text' => 'Concerned',
                'is_correct' => 1
            ],
            [
                'question_id' => 5,
                'option_text' => 'Indifferent',
                'is_correct' => 0
            ],
            [
                'question_id' => 5,
                'option_text' => 'Excited',
                'is_correct' => 0
            ],
            [
                'question_id' => 5,
                'option_text' => 'Confused',
                'is_correct' => 0
            ],

            [
                'question_id' => 6,
                'option_text' => 'Global warming',
                'is_correct' => 1
            ],
            [
                'question_id' => 6,
                'option_text' => 'Historical events',
                'is_correct' => 0
            ],
            [
                'question_id' => 6,
                'option_text' => 'Scientific discoveries',
                'is_correct' => 0
            ],
            [
                'question_id' => 6,
                'option_text' => 'Technological advancements',
                'is_correct' => 0
            ],

            [
                'question_id' => 7,
                'option_text' => 'A detailed history',
                'is_correct' => 0
            ],
            [
                'question_id' => 7,
                'option_text' => 'Future predictions',
                'is_correct' => 1
            ],
            [
                'question_id' => 7,
                'option_text' => 'Personal opinions',
                'is_correct' => 0
            ],
            [
                'question_id' => 7,
                'option_text' => 'Political analysis',
                'is_correct' => 0
            ],

            [
                'question_id' => 8,
                'option_text' => 'The importance of recycling',
                'is_correct' => 0
            ],
            [
                'question_id' => 8,
                'option_text' => 'The consequences of pollution',
                'is_correct' => 1
            ],
            [
                'question_id' => 8,
                'option_text' => 'The advancements in solar energy',
                'is_correct' => 0
            ],
            [
                'question_id' => 8,
                'option_text' => 'The history of environmental policies',
                'is_correct' => 0
            ],

            [
                'question_id' => 9,
                'option_text' => 'To inform',
                'is_correct' => 1
            ],
            [
                'question_id' => 9,
                'option_text' => 'To entertain',
                'is_correct' => 0
            ],
            [
                'question_id' => 9,
                'option_text' => 'To persuade',
                'is_correct' => 0
            ],
            [
                'question_id' => 9,
                'option_text' => 'To criticize',
                'is_correct' => 0
            ],

            [
                'question_id' => 10,
                'option_text' => 'Chronological order',
                'is_correct' => 0
            ],
            [
                'question_id' => 10,
                'option_text' => 'Cause and effect',
                'is_correct' => 1
            ],
            [
                'question_id' => 10,
                'option_text' => 'Problem and solution',
                'is_correct' => 0
            ],
            [
                'question_id' => 10,
                'option_text' => 'Compare and contrast',
                'is_correct' => 0
            ],

            [
                'question_id' => 11,
                'option_text' => 'Learning a second language broadens cultural understanding.',
                'is_correct' => 1
            ],
            [
                'question_id' => 11,
                'option_text' => "Learning a second language is unnecessary in today's world.",
                'is_correct' => 0
            ],
            [
                'question_id' => 11,
                'option_text' => 'Learning a second language should only be done for career purposes.',
                'is_correct' => 0
            ],
            [
                'question_id' => 11,
                'option_text' => 'Learning a second language is too difficult for most people.',
                'is_correct' => 0
            ],

            [
                'question_id' => 12,
                'option_text' => 'Technology has greatly improved education.',
                'is_correct' => 1
            ],
            [
                'question_id' => 12,
                'option_text' => 'Technology has made education less personal.',
                'is_correct' => 0
            ],
            [
                'question_id' => 12,
                'option_text' => 'Technology has had no significant impact on education.',
                'is_correct' => 0
            ],
            [
                'question_id' => 12,
                'option_text' => 'Technology has created more challenges than opportunities in education.',
                'is_correct' => 0
            ],

            [
                'question_id' => 13,
                'option_text' => 'A memorable event should have personal significance.',
                'is_correct' => 1
            ],
            [
                'question_id' => 13,
                'option_text' => 'A memorable event is always something positive.',
                'is_correct' => 0
            ],
            [
                'question_id' => 13,
                'option_text' => 'A memorable event should be universally recognized.',
                'is_correct' => 0
            ],
            [
                'question_id' => 13,
                'option_text' => 'A memorable event is often trivial.',
                'is_correct' => 0
            ],

            [
                'question_id' => 14,
                'option_text' => 'Healthy eating habits contribute to long-term well-being.',
                'is_correct' => 1
            ],
            [
                'question_id' => 14,
                'option_text' => 'Healthy eating habits are difficult to maintain.',
                'is_correct' => 0
            ],
            [
                'question_id' => 14,
                'option_text' => 'Healthy eating habits are not essential for everyone.',
                'is_correct' => 0
            ],
            [
                'question_id' => 14,
                'option_text' => 'Healthy eating habits only matter for athletes.',
                'is_correct' => 0
            ],

            [
                'question_id' => 15,
                'option_text' => 'Social media can be beneficial in professional settings.',
                'is_correct' => 1
            ],
            [
                'question_id' => 15,
                'option_text' => 'Social media should not be used in professional settings.',
                'is_correct' => 0
            ],
            [
                'question_id' => 15,
                'option_text' => 'Social media is only useful for personal interactions.',
                'is_correct' => 0
            ],
            [
                'question_id' => 15,
                'option_text' => 'Social media has no impact on professional life.',
                'is_correct' => 0
            ],
        ];

        foreach ($answers as $answer) {
            AnswerOption::create($answer);
        }
    }
}
