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
        'copyright', 
        'description',
        'site_name',
        'email2',
        'logo',
        'favicon',
        'default_avatar_user',
        'default_avatar_student',
        'default_avatar_instructor',
        'twitter_link', 
        'facebook_link', 
        'instagram_link', 
        'linkedln_link', 
        'youtube_link',
    ];
}
