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
        'top',
        'image', 
        'url_video', 
        'user_id', 
        'active', 
        'etat',
        'date_creation',
    ];

    public function prerequis()
    {
        return $this->belongsToMany(Prerequis::class, 'prerequis_cours');
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_cours');
    }

    public function categoriy()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'niveau_id');
    }

    public function devise()
    {
        return $this->belongsTo(Devise::class, 'devise_id');
    }

    public function langue()
    {
        return $this->belongsTo(Langue::class, 'langue_id');
    }

    public function instructor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Automatically convert the string into an array
    public function getObjectifsAttribute($value)
    {
        return $value ? explode(';', $value) : [];
    }

    public function getPrerequisAttribute($value)
    {
        return $value ? explode(';', $value) : [];
    }

}
