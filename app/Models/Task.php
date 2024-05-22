<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Definisci i campi che possono essere riempiti in massa
    protected $fillable = ['title', 'description', 'project_id'];

    // Definisci la relazione con il progetto
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}