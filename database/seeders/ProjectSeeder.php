<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assicurati che ci sia almeno un utente con id 1
        if (\App\Models\User::find(1)) {
            Project::create([
                'name' => 'Progetto A',
                'description' => 'Descrizione del progetto A',
                'user_id' => 1, // Assicurati che esista un utente con id 1
            ]);

            Project::create([
                'name' => 'Progetto B',
                'description' => 'Descrizione del progetto B',
                'user_id' => 1,
            ]);

            // Aggiungi altri progetti se necessario
        } else {
            echo "Nessun utente trovato con id 1. Crea un utente prima di eseguire il seeder.";
        }
    }
}