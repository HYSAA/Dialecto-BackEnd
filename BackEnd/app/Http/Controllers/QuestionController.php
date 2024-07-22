<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Lesson;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Lesson $lesson)
    {
        $questions = $lesson->questions;
        return response()->json($questions);
    }

    public function store(Request $request, Lesson $lesson)
    {
        $validatedData = $request->validate([
            'content' => 'required|string',
            'answer' => 'required|string',
        ]);

        $question = $lesson->questions()->create($validatedData);
        return response()->json($question, 201);
    }

    public function show(Lesson $lesson, Question $question)
    {
        return response()->json($question);
    }

    public function update(Request $request, Lesson $lesson, Question $question)
    {
        $validatedData = $request->validate([
            'content' => 'required|string',
            'answer' => 'required|string',
        ]);

        $question->update($validatedData);
        return response()->json($question);
    }

    public function destroy(Lesson $lesson, Question $question)
    {
        $question->delete();
        return response()->json(null, 204);
    }
}