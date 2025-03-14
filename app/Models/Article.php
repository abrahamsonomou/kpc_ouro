<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 
        'description', 
        'categorie_id', 
        'user_id', 
        'image', 
        'active', 
        'etat',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_articles');
    }
}
