<?php

namespace Database\Seeders;
use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Quiz::create([
            "title" => "درس مبانی هوش محاسباتی",
            "question_count" => 10,
            "score" => 10,
            "time_limit" => 50,
        ]);
    }
}
