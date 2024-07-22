<!-- resources/views/courses/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Add New Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label for="name">Course Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Save</button>
    </form>
@endsection
