<!-- resources/views/courses/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Course Name:</label>
        <input type="text" id="name" name="name" value="{{ $course->name }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
