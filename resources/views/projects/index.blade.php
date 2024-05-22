@extends('layouts.app')

@section('content')
    <h1>Elenco dei Progetti</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach($projects as $project)
            <li>
                <a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
                <!-- Aggiungi link per modificare il progetto -->
                <a href="{{ route('projects.edit', $project->id) }}">Modifica</a>
                <!-- Aggiungi form per cancellare il progetto -->
                <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Cancella</button>
                </form>
            </li>
        @endforeach
    </ul>
    <!-- Aggiungi link per creare un nuovo progetto -->
    <a href="{{ route('projects.create') }}">Crea un nuovo progetto</a>
@endsection