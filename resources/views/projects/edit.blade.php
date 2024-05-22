<!-- resources/views/projects/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Modifica Progetto</h1>

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $project->name }}">
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea id="description" name="description">{{ $project->description }}</textarea>
        </div>
        <button type="submit">Aggiorna Progetto</button>
    </form>
@endsection