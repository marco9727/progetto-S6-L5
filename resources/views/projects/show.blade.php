<!-- resources/views/projects/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dettaglio Progetto</h1>

    <p><strong>Nome:</strong> {{ $project->name }}</p>
    <p><strong>Descrizione:</strong> {{ $project->description }}</p>
@endsection