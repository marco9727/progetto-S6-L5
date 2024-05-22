<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Assicura che l'utente sia autenticato per accedere ai metodi del controller
    }

    /**
     * Mostra l'elenco di tutti i progetti paginati.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::paginate(10); // Paginazione con 10 progetti per pagina
        return view('projects.index', compact('projects'));
    }

    /**
     * Mostra il form per la creazione di un nuovo progetto.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $this->authorize('create', Project::class); // Verifica l'autorizzazione

        return view('projects.create');
    }

    /**
     * Salva un nuovo progetto nel database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->authorize('create', Project::class); // Verifica l'autorizzazione

        // Validazione dei dati
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        // Creazione di un nuovo progetto
        Project::create($validatedData);

        return redirect()->route('projects.index')->with('success', 'Progetto creato con successo.');
    }

    /**
     * Mostra i dettagli di un singolo progetto.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\View\View
     */
    public function show(Project $project)
    {
        // Non è richiesta l'autorizzazione per visualizzare un singolo progetto
        return view('projects.show', compact('project'));
    }

    /**
     * Mostra il form per modificare un progetto esistente.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\View\View
     */
    public function edit(Project $project)
    {
        $this->authorize('update', $project); // Verifica l'autorizzazione

        return view('projects.edit', compact('project'));
    }

    /**
     * Aggiorna un progetto nel database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project); // Verifica l'autorizzazione

        // Validazione dei dati
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        // Aggiornamento del progetto
        $project->update($validatedData);

        return redirect()->route('projects.index')->with('success', 'Progetto aggiornato con successo.');
    }

    /**
     * Elimina un progetto dal database.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project)
    {
        $this->authorize('delete', $project); // Verifica l'autorizzazione

        // Eliminazione del progetto
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Progetto eliminato con successo.');
    }
}