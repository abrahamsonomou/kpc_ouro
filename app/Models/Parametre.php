<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    use HasFactory;

    protected $fillable = [
        'telephone', 
        'email', 
        'twitter_link', 
        'facebook_link', 
        'instagram_link', 
        'linkedln_link', 
        'youtube_link',
    ];
}
