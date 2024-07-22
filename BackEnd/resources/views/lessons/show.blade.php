<!-- resources/views/lessons/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $lesson->name }}</h1>
    <a href="{{ route('lessons.edit', $lesson) }}">Edit</a>
    <form action="{{ route('lessons.destroy', $lesson) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
