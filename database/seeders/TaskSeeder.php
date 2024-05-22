<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creazione di alcuni compiti di esempio
        Task::create([
            'name' => 'Attività 1',
            'description' => 'Descrizione dell\'attività 1',
            'project_id' => 1, // Assicurati che esista un progetto con id 1
        ]);

        Task::create([
            'name' => 'Attività 2',
            'description' => 'Descrizione dell\'attività 2',
            'project_id' => 1,
        ]);

        // Aggiungi altri compiti se necessario
    }
}
