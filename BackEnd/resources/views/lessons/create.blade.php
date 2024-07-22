<!-- resources/views/lessons/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Add New Lesson for {{ $course->name }}</h1>
    <form action="{{ route('courses.lessons.store', $course) }}" method="POST">
        @csrf
        <label for="name">Lesson Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Save</button>
    </form>
@endsection
