<!-- resources/views/lessons/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Lesson</h1>
    <form action="{{ route('lessons.update', $lesson) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Lesson Name:</label>
        <input type="text" id="name" name="name" value="{{ $lesson->name }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
