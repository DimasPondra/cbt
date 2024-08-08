<?php

namespace Database\Seeders;

use App\Models\QuestionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questionCategories = [
            [
                'test_id' => 1,
                'name' => 'listening',
                'description' => "The listening comprehension section evaluates your ability
                 to understand spoken English. You will listen to conversations and lectures, 
                 and answer questions about them. This section measures your ability to 
                 understand main ideas, details, inferences, and the speaker's purpose."
            ],
            [
                'test_id' => 1,
                'name' => 'reading',
                'description' => 'The reading comprehension section tests your ability to 
                read and understand academic texts in English. You will read passages and 
                answer questions about the content, meaning, and structure of the texts. This 
                section assesses your skills in identifying main ideas, supporting details, 
                and understanding vocabulary in context.'
            ],
            [
                'test_id' => 1,
                'name' => 'writing',
                'description' => 'The writing section assesses your ability to write in 
                English in an academic setting. You will be asked to write essays that express 
                your opinion, describe experiences, and explain ideas clearly and coherently. 
                This section measures your ability to organize your thoughts, use appropriate 
                grammar and vocabulary, and support your arguments with evidence.'
            ],
        ];

        foreach ($questionCategories as $questionCategory) {
            QuestionCategory::create($questionCategory);
        }
    }
}
