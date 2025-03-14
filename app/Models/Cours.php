<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 
        'description', 
        'short_description',
        'categorie_id', 
        'niveau_id', 
        'langue_id', 
        'prix', 
        'prix_promo', 
        'taux_reduction', 
        'devise_id', 
        'duree', 
        'nombre_lesson',
        'certificat', 
        'nombre_quizz', 
        'objectifs', 
        'prerequis', 
        'image', 
        'url_video', 
        'user_id', 
        'active', 
        'etat',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_cours');
    }
    
}
