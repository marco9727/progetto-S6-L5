<!-- resources/views/projects/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crea Nuovo Progetto</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <button type="submit">Salva Progetto</button>
    </form>
@endsection