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
use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    

    public function home()
    {
        // Récupérer les 20 premiers cours avec 'top' égal à 1 et où 'active' est 1
        $cours = Cours::where('active', 1)
                      ->where('top', 1)  // Filtrer par 'top' égal à 1
                      ->where('etat', 1)
                      ->with('user')      // Charger la relation avec 'user'
                      ->take(12)          // Limiter les résultats à 12 cours
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
            'sujet' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact_success')->with('success', 'Message envoyé avec succès !');
    }

    public function contact_success()
    {
        return view('site.contact-success');
    }

    public function cours()
    {
        $cours = Cours::where('active', 1)->where('etat', 1)->orderBy('created_at', 'desc')->with('user')->paginate(2);
        return view('site.cours.allcourse', compact('cours'));
    }

    public function cours_details($id)
    {
        // Récupérer les détails du cours
        $cours = Cours::findOrFail($id);
    
        // Récupérer les cours en relation
        $cours_en_relation = $cours->coursEnRelation();


        // Retourner la vue avec les détails du cours et les cours en relation
        return view('site.cours.details', compact('cours', 'cours_en_relation'));
    }
    
    public function enroulement_cours($coursId)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est déjà inscrit
        if (Inscription::where('user_id', $user->id)->where('cours_id', $coursId)->exists()) {
            return redirect()->back()->with('error', 'Vous êtes déjà inscrit à ce cours.');
        }

        // Inscrire l'utilisateur
        Inscription::create([
            'user_id' => $user->id,
            'cours_id' => $coursId
        ]);

        return redirect()->back()->with('success', 'Inscription réussie au cours.');
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


    public function services()
    {
        return view('site.nos-services');
    }


    public function about()
    {
        return view('site.about');
    }

}
