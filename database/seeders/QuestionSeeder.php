<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'question_category_id' => 1,
                'question_type' => 'text',
                'question_text' => 'What did the speaker mention?',
                'score' => 5
            ],
            [
                'question_category_id' => 1,
                'question_type' => 'text',
                'question_text' => 'Where is the speaker going?',
                'score' => 5
            ],
            [
                'question_category_id' => 1,
                'question_type' => 'text',
                'question_text' => 'What time is the meeting?',
                'score' => 5
            ],
            [
                'question_category_id' => 1,
                'question_type' => 'text',
                'question_text' => 'What was the main topic of the conversation?',
                'score' => 5
            ],
            [
                'question_category_id' => 1,
                'question_type' => 'text',
                'question_text' => 'How did the speaker feel about the topic?',
                'score' => 5
            ],

            [
                'question_category_id' => 2,
                'question_type' => 'text',
                'question_text' => 'What is the main idea of the passage?',
                'score' => 5
            ],
            [
                'question_category_id' => 2,
                'question_type' => 'text',
                'question_text' => 'Which of the following is NOT mentioned in the passage?',
                'score' => 5
            ],
            [
                'question_category_id' => 2,
                'question_type' => 'text',
                'question_text' => 'What can be inferred from the passage?',
                'score' => 5
            ],
            [
                'question_category_id' => 2,
                'question_type' => 'text',
                'question_text' => "What is the author's purpose in writing this passage?",
                'score' => 5
            ],
            [
                'question_category_id' => 2,
                'question_type' => 'text',
                'question_text' => 'Which statement best describes the structure of the passage?',
                'score' => 5
            ],

            [
                'question_category_id' => 3,
                'question_type' => 'text',
                'question_text' => 'Write an essay about the importance of learning a second language.',
                'score' => 10
            ],
            [
                'question_category_id' => 3,
                'question_type' => 'text',
                'question_text' => 'Discuss the effects of technology on education.',
                'score' => 10
            ],
            [
                'question_category_id' => 3,
                'question_type' => 'text',
                'question_text' => 'Describe a memorable event in your life and explain why it is significant.',
                'score' => 10
            ],
            [
                'question_category_id' => 3,
                'question_type' => 'text',
                'question_text' => 'Explain the benefits of healthy eating habits.',
                'score' => 10
            ],
            [
                'question_category_id' => 3,
                'question_type' => 'text',
                'question_text' => 'Argue for or against the use of social media in professional settings.',
                'score' => 10
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
