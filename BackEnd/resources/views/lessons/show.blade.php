@extends('layouts.app')

@section('content')
    <h1>Lesson Details</h1>
    <p><strong>Title:</strong> {{ $lesson->title }}</p>
    <p><strong>Course ID:</strong> {{ $lesson->course_id }}</p>
    <a href="{{ route('lessons.index') }}" class="btn btn-secondary">Back to Lessons</a>
@endsection
