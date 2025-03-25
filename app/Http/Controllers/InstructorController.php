<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Tag;
use App\Models\Cours;
use App\Models\Langue;
use App\Models\Article;

class InstructorController extends Controller
{
    //
    public function my_cours()
    {
        return view('instructors.my_cours');
    }


    public function create_cours()
    {
        return view('instructors.create_cours');
    }

    public function my_articles()
    {
        // Get the articles created by the authenticated user
         $articles = Article::where('user_id', auth()->id())->get();
         $categories = Categorie::where('active', 1)->
         where('is_article', 1)->get();

        return view('instructors.my_articles', compact('articles', 'categories'));
    }

    public function create_articles()
    {
        return view('instructors.create_articles');
    }

    public function reviews()
    {
        return view('instructors.reviews');
    }

    public function settings()
    {
        return view('instructors.settings');
    }

    public function dashboard()
    {
        return view('instructors.dashboard');
    }

}
