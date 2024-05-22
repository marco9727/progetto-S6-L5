<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Controlla se l'utente esiste già
        if (!User::where('email', 'test@example.com')->exists()) {
            User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        if (!User::where('email', 'test2@example.com')->exists()) {
            User::create([
                'name' => 'Test2 User2',
                'email' => 'test2@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        // Aggiungi altri utenti se necessario
    }
}