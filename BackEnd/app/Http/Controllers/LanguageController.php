<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    public function index()
    {
        // Get all languages
        $languages = Language::all();
        return response()->json($languages);
    }

    public function store(Request $request)
    {
        // Validate and create a new language
        $validatedData = $request->validate([
            'name' => 'required|string',
            'identifier' => 'required|string'
        ]);

        $language = Language::create($validatedData);
        return response()->json($language, 201);
    }

    public function show(Language $language)
    {
        // Get a specific language by ID
        return response()->json($language);
    }

    public function update(Request $request, Language $language)
    {
        // Validate and update a language
        $validatedData = $request->validate([
            'name' => 'required|string',
            'identifier' => 'required|string'
            // Add validation for other fields if needed
        ]);

        $language->update($validatedData);
        return response()->json($language);
    }

    public function destroy(Language $language)
    {
        // Delete a language
        $language->delete();
        return response()->json(null, 204);
    }
}