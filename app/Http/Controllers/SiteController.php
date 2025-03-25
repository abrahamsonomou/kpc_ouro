<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Bureau;
use App\Models\Cours;
use App\Models\Categorie;
use App\Models\Tag;
use App\Models\Langue;
use App\Models\Article;
use App\Models\Slide;
use App\Models\Service;
use App\Models\Partenaire;

class SiteController extends Controller
{
    
    public function home()
    {
        // Récupérer les 20 premiers cours avec 'top' égal à 1 et où 'active' est 1
        $cours = Cours::where('active', 1)
                      ->where('top', 1)  // Filtrer par 'top' égal à 1
                      ->with('user')      // Charger la relation avec 'user'
                      ->take(20)          // Limiter les résultats à 20 cours
                      ->get();
        $slides = Slide::where('active', 1)->orderBy('ordre', 'asc')->get();
        $partenaires = Partenaire::where('active', 1)->orderBy('ordre', 'asc')->get();
        return view('site.home', compact('cours', 'slides', 'partenaires'));
    }
    
    
    
    public function contact()
    {
        $bureaux = Bureau::all();
        return view('site.contact', compact('bureaux'));
    }

     /**
     * Enregistre un nouveau contact (Create).
     */
    public function store_contact(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            // 'email' => 'required|email|unique:contacts,email',
            'email' => 'required|email',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact_success')->with('success', 'Message envoyé avec succès !');
    }

    public function contact_success()
    {
        return view('site.contact_success');
    }

    public function cours()
    {
        $cours = Cours::where('active', 1)->with('user')->get();
        return view('site.cours', compact('cours'));
    }

    public function cours_details()
    {
        return view('site.cours-details');
    }

    public function blog()
    {
            // Get the articles created by the authenticated user
    // $articles = Article::where('active', 1)->get();
    $articles = Article::where('active', 1)->orderBy('created_at', 'desc')->paginate(6);

    $categories = Categorie::withCount('articles')->where('active', 1)->get();
    // where('active', 1)->get();

    // Count the articles created by the authenticated user
    $articleCount = $articles->count();

    $tags = Tag::where('active', 1)->
    where('is_article', 1)->get();

        // Retrieve the 3 most recent articles
    $articles_recent = Article::where('active', 1)->orderBy('created_at', 'desc')->take(3)->get();

    // Return the view with the articles and article count
        return view('site.articles.blog', compact('articles', 'articleCount', 'categories', 'tags', 'articles_recent'));
    }

    public function showByTag($tagId)
{
    $tag = Tag::findOrFail($tagId);  // Find the tag by ID
    $articles = $tag->articles;      // Get all articles associated with this tag

    return view('site.articles.by_tag', compact('tag', 'articles'));
}


    public function blog_details($id)
    {
        $article = Article::findOrFail($id);
        return view('site.articles.blog-detail', compact('article'));
    }

    public function events()
    {
        return view('site.events');
    }


    public function instructors()
    {
        return view('site.instructors');
    }


    public function about()
    {
        return view('site.about');
    }

}
