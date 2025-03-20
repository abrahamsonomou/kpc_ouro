<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Bureau;
use App\Models\Cours;

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
    
        return view('site.home', compact('cours'));
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
        return view('site.blog');
    }

    public function blog_details()
    {
        return view('site.blog-details');
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
