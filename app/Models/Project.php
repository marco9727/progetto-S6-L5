<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Definisci i campi che possono essere riempiti in massa
    protected $fillable = ['name', 'description', 'user_id'];

    // Definisci la relazione con l'utente
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisci la relazione con le attività
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}