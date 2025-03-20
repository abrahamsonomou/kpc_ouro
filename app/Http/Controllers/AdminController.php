<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Pays;
use App\Models\Devise;
use App\Models\Niveau;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Support\Facades\Hash;
use App\Models\Categorie;
use App\Models\Tag;
use App\Models\Cours;
use App\Models\Langue;
use App\Models\Article;
use App\Models\Bureau;
use App\Models\Parametre;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function reviews()
    {
        return view('admin.reviews');
    }

    public function cours_categorie()
    {
        return view('admin.cours_categorie');
    }

    public function details_cours()
    {
        return view('admin.details_cours');
    }

    public function settings(Request $request, $id = null)
    {
        // Retrieve the first Parametre by ID or create a new one with default values if not found
        $parametre = Parametre::firstOrCreate(
            ['id' => $id], // Try to find the Parametre by ID
            [ // If not found, create with these default values
                'telephone' => '',
                'email' => '',
                'twitter_link' => '',
                'facebook_link' => '',
                'instagram_link' => '',
                'linkedln_link' => '',
                'youtube_link' => ''
            ]
        );

        // If the request is a POST (form submission), update the Parametre
        if ($request->isMethod('post')) {
            $request->validate([
                'telephone' => 'required|string',
                'email' => 'required|email',
                'twitter_link' => 'nullable|url',
                'facebook_link' => 'nullable|url',
                'instagram_link' => 'nullable|url',
                'linkedln_link' => 'nullable|url',
                'youtube_link' => 'nullable|url',
            ]);

            // Update the Parametre with the new data
            $parametre->update($request->all());

            return redirect()->route('admin.settings', $parametre->id)->with('success', 'Parameters updated successfully!');
        }
        // Return the edit form with the Parametre data
        return view('admin.settings', compact('parametre'));
    }

  

    public function instructors()
    {
        return view('admin.instructors');
    }

    public function instructors_request()
    {
        return view('admin.instructors_request');
    }

    public function instructors_details()
    {
        return view('admin.instructors_details');
    }

    public function students()
    {
        return view('admin.students');
    }

    public function contacts()
    {
        // $contacts = Contact::latest()->get();
        $contacts = 1;
        return view('admin.list_contacts', compact('contacts'));
    }

    public function pays_list()
    {
        $pays = Pays::where('active', 1)->get();
        return view('admin.pays.list', compact('pays'));
    }

    // Show the form to create a new Pays
    public function pays_create()
    {
        return view('admin.pays.create');
    }

    // Store a new Pays
    public function pays_store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'code_iso' => 'required|string',
            'indicatif' => 'required|string',
            'nationnalite' => 'required|string',
            'active' => 'required|in:0,1',
        ]);

        Pays::create($request->all());

        return redirect()->route('admin.pays.list')->with('success', 'Pays created successfully');
    }

    // Show a single Pays
    public function pays_show($id)
    {
        $pays = Pays::findOrFail($id);
        return view('admin.pays.show', compact('pays'));
    }

    // Show the form to edit a Pays
    public function pays_edit($id)
    {
        $pays = Pays::findOrFail($id);
        return view('admin.pays.edit', compact('pays'));
    }

    // Update the Pays
    public function pays_update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'sometimes|required|string',
            'code_iso' => 'sometimes|required|string',
            'indicatif' => 'sometimes|required|string',
            'nationnalite' => 'sometimes|required|string',
            'active' => 'required|in:0,1',
        ]);

        $pays = Pays::findOrFail($id);
        $pays->update($request->all());

        return redirect()->route('admin.pays.list')->with('success', 'Pays updated successfully');
    }

    // Delete a Pays
    public function pays_destroy($id)
    {
        $pays = Pays::findOrFail($id);
        $pays->delete();

        return redirect()->route('admin.pays.list')->with('success', 'Pays deleted successfully');
    }

    public function villes_list()
    {
        return view('admin.villes.list');
    }

    // Display all Devise
    public function devises_list()
    {
        $devises = Devise::where('active', 1)->get();
        return view('admin.devises.list', compact('devises'));
    }

    // Show the form to create a new Devise
    public function devises_create()
    {
        return view('admin.devises.create');
    }

    // Store a new Devise
    public function devises_store(Request $request)
    {
        $request->validate([
            // 'code_iso' => 'string|unique:devises,code_iso',
            'code_iso' => 'string',
            'symbole' => 'string',
            'nom' => 'string',
            'nom_court' => 'string',
            'active' => 'in:0,1',
        ]);

        Devise::create($request->all());

        return redirect()->route('admin.devises.list')->with('success', 'Devise created successfully');
    }

    // Show a single Devise
    public function devises_show($id)
    {
        $devise = Devise::findOrFail($id);
        return view('admin.devises.show', compact('devise'));
    }

    // Show the form to edit a Devise
    public function devises_edit($id)
    {
        $devise = Devise::findOrFail($id);
        return view('admin.devises.edit', compact('devise'));
    }

    // Update the Devise
    public function devises_update(Request $request, $id)
    {
        $request->validate([
            'code_iso' => 'sometimes|required|string|unique:devises,code_iso,' . $id,
            'symbole' => 'sometimes|required|string',
            'nom' => 'sometimes|required|string',
            'nom_court' => 'sometimes|required|string',
            'active' => 'required|in:0,1',
        ]);

        $devise = Devise::findOrFail($id);
        $devise->update($request->all());

        return redirect()->route('admin.devises.list')->with('success', 'Devise updated successfully');
    }

    // Delete a Devise
    public function devises_destroy($id)
    {
        $devise = Devise::findOrFail($id);
        $devise->delete();

        return redirect()->route('admin.devises.list')->with('success', 'Devise deleted successfully');
    }

    // Display all Niveaux

    public function niveaux_list()
    {
        $niveaux = Niveau::all();
        return view('admin.niveaux.list', compact('niveaux'));
    }

    //

    // Show the form to create a new Niveau
    public function niveaux_create()
    {
        return view('admin.niveaux.create');
    }

    // Store a new Niveau
    public function niveaux_store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|unique:niveaux,nom',
            'active' => 'required|in:0,1',
        ]);

        Niveau::create($request->all());

        return redirect()->route('admin.niveaux.list')->with('success', 'Niveau created successfully');
    }

    // Show the form to edit a Niveau
    public function niveaux_edit($id)
    {
        $niveau = Niveau::findOrFail($id);
        return view('admin.niveaux.edit', compact('niveau'));
    }

    // Update the Niveau
    public function niveaux_update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'sometimes|required|string|unique:niveaux,nom,' . $id,
            'active' => 'required|in:0,1',
        ]);

        $niveau = Niveau::findOrFail($id);
        $niveau->update($request->all());

        return redirect()->route('admin.niveaux.list')->with('success', 'Niveau updated successfully');
    }

    public function niveaux_show($id)
    {
        $niveau = Niveau::findOrFail($id);
        return view('admin.niveaux.show', compact('niveau'));
    }

    // Delete a Niveau
    public function niveaux_destroy($id)
    {
        $niveau = Niveau::findOrFail($id);
        $niveau->delete();

        return redirect()->route('admin.niveaux.list')->with('success', 'Niveau deleted successfully');
    }

    // Display all users
    public function users_list()
    {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    // Show the form to create a new user
    public function users_create()
    {
        $pays = Pays::all();
        $villes = Ville::all();
        return view('admin.users.create', compact('pays', 'villes'));
    }

    // Store a new user
    public function users_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'telephone' => 'nullable|string',
            'date_naissance' => 'nullable|date',
            'adresse1' => 'nullable|string',
            'adresse2' => 'nullable|string',
            'paysId' => 'exists:pays,id',
            'villeId' => 'exists:villes,id',
            // 'villeId' => 'exists:villes,id',
            'bio' => 'nullable|string',
            'avatar' => 'nullable|image|max:1024',
            'is_admin'                => 'in:0,1',
            'is_active'                => 'in:0,1',
            'approuve_cours'                => 'in:0,1',
        ]);

        $user = new User($request->all());

        if ($request->hasFile('avatar')) {
            $user->avatar = $request->file('avatar')->store('avatars', 'public');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.users.list')->with('success', 'User created successfully');
    }

    // Show a single user
    public function users_show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    // Show the form to edit a user
    public function users_edit($id)
    {
        $user = User::findOrFail($id);
        $pays = Pays::all();
        $villes = Ville::all();
        return view('admin.users.edit', compact('user', 'pays', 'villes'));
    }

    // Update a user
    public function users_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:users,email,' . $id,
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'telephone' => 'nullable|string',
            'date_naissance' => 'nullable|date',
            'adresse1' => 'nullable|string',
            'adresse2' => 'nullable|string',
            'paysId' => 'exists:pays,id',
            'villeId' => 'exists:villes,id',
            'bio' => 'nullable|string',
            'avatar' => 'nullable|image|max:1024',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        if ($request->hasFile('avatar')) {
            $user->avatar = $request->file('avatar')->store('avatars', 'public');
        }

        return redirect()->route('admin.users.list')->with('success', 'User updated successfully');
    }

    // Delete a user
    public function users_destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.list')->with('success', 'User deleted successfully');
    }

    // Display all categories
    public function categories_list()
    {
        $categories = Categorie::all();
        return view('admin.categories.list', compact('categories'));
    }

    // Show the form to create a new category
    public function categories_create()
    {
        return view('admin.categories.create');
    }

    // Store a new category
    public function categories_store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|unique:categories,code',
            'nom' => 'required|string',
             'is_article' => 'required|in:0,1',
             'is_cours' => 'required|in:0,1',
             'active' => 'required|in:0,1',
        ]);

        Categorie::create($request->all());

        return redirect()->route('admin.categories.list')->with('success', 'Categorie created successfully');
    }

    // Show the form to edit a category
    public function categories_edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('admin.categories.edit', compact('categorie'));
    }

    // Update the category
    public function categories_update(Request $request, $id)
    {
        $request->validate([
            'code' => 'sometimes|required|string|unique:categories,code,' . $id,
            'nom' => 'required|string',
            'is_article' => 'required|in:0,1',
            'is_cours' => 'required|in:0,1',
            'active' => 'required|in:0,1',
        ]);

        $categorie = Categorie::findOrFail($id);
        $categorie->update($request->all());

        return redirect()->route('admin.categories.list')->with('success', 'Categorie updated successfully');
    }

    // Delete a category
    public function categories_destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return redirect()->route('admin.categories.list')->with('success', 'Categorie deleted successfully');
    }

    // Display all tags
    public function tags_list()
    {
        $tags = Tag::all();
        return view('admin.tags.list', compact('tags'));
    }

    // Show the form to create a new tag
    public function tags_create()
    {
        return view('admin.tags.create');
    }

    // Store a new tag
    public function tags_store(Request $request)
    {
        $request->validate([
            //   'code' => 'required|string|unique:tags,code',
            'code' => 'required|string|unique:tags,code',
            'nom' => 'required|string',
            'is_article' => 'required|in:0,1',
            'is_cours' => 'required|in:0,1',
            'active' => 'required|in:0,1',
        ]);

        Tag::create($request->all());

        return redirect()->route('admin.tags.list')->with('success', 'Tag created successfully');
    }

    // Show the form to edit a tag
    public function tags_edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.edit', compact('tag'));
    }

    // Update the tag
    public function tags_update(Request $request, $id)
    {
        $request->validate([
            'code' => 'sometimes|required|string|unique:tags,code,' . $id,
            'nom' => 'required|string',
            'is_article' => 'required|in:0,1',
            'is_cours' => 'required|in:0,1',
            'active' => 'required|in:0,1',
        ]);

        $tag = Tag::findOrFail($id);
        $tag->update($request->all());

        return redirect()->route('admin.tags.list')->with('success', 'Tag updated successfully');
    }

    // Delete a tag
    public function tags_destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->route('admin.tags.list')->with('success', 'Tag deleted successfully');
    }

    public function langues_list()
    {
        $langues = Langue::all();
        return view('admin.langues.list', compact('langues'));
    }

    //

    // Show the form to create a new Langue
    public function langues_create()
    {
        return view('admin.langues.create');
    }

    // Store a new Langue
    public function langues_store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|unique:langues,nom',
            'code' => 'required|string|unique:langues,code',
            'is_cours' => 'required|in:0,1',
            'active' => 'required|in:0,1',
        ]);

        Langue::create($request->all());

        return redirect()->route('admin.langues.list')->with('success', 'Langue created successfully');
    }

    // Show the form to edit a Langue
    public function langues_edit($id)
    {
        $langue = Langue::findOrFail($id);
        return view('admin.langues.edit', compact('langue'));
    }

    // Update the langue
    public function langues_update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'sometimes|required|string|unique:langues,nom,' . $id,
            'code' => 'required|string|unique:langues,code',
            'is_cours' => 'required|in:0,1',
            'active' => 'sometimes|boolean',
        ]);

        $langue = langue::findOrFail($id);
        $langue->update($request->all());

        return redirect()->route('admin.langues.list')->with('success', 'langue updated successfully');
    }

    public function langues_show($id)
    {
        $langue = langue::findOrFail($id);
        return view('admin.langues.show', compact('langue'));
    }

    // Delete a langue
    public function langues_destroy($id)
    {
        $langue = langue::findOrFail($id);
        $langue->delete();

        return redirect()->route('admin.langues.list')->with('success', 'langue deleted successfully');
    }

    public function bureaux_list()
    {
        $bureaux = Bureau::all();
        return view('admin.bureaux.list', compact('bureaux'));
    }

    //

    // Show the form to create a new bureaux
    public function bureaux_create()
    {
        return view('admin.bureaux.create');
    }

    // Store a new bureaux
    public function bureaux_store(Request $request)
    {
        $request->validate([
            'ville' => 'required|string',
            'adresse' => 'required|string',
            'email' => 'required|string',
            'telephone' => 'required|string',
            'active' => 'required|in:0,1',
        ]);

        Bureau::create($request->all());

        return redirect()->route('admin.bureaux.list')->with('success', 'bureaux created successfully');
    }

    // Show the form to edit a bureaux
    public function bureaux_edit($id)
    {
        $bureaux = Bureau::findOrFail($id);
        return view('admin.bureaux.edit', compact('bureaux'));
    }

    // Update the bureaux
    public function bureaux_update(Request $request, $id)
    {
        $request->validate([
            'ville' => 'required|string',
            'adresse' => 'required|string',
            'email' => 'required|string',
            'telephone' => 'required|string',
            'active' => 'required|in:0,1',
        ]);

        $bureaux = Bureau::findOrFail($id);
        $bureaux->update($request->all());

        return redirect()->route('admin.bureaux.list')->with('success', 'bureaux updated successfully');
    }

    public function bureaux_show($id)
    {
        $bureaux = Bureau::findOrFail($id);
        return view('admin.bureaux.show', compact('bureaux'));
    }

    // Delete a bureaux
    public function bureaux_destroy($id)
    {
        $bureaux = Bureau::findOrFail($id);
        $bureaux->delete();

        return redirect()->route('admin.bureaux.list')->with('success', 'bureaux deleted successfully');
    }



    public function cours_list()
    {
        $cours = Cours::all();
        return view('admin.cours.list', compact('cours'));
    }

    public function cours_create()
    {
        $categories = Categorie::where('active', 1)->get();
        $niveaux = Niveau::where('active', 1)->get();
        $langues = Langue::where('active', 1)->get();
        $devises = Devise::where('active', 1)->get();
        $instructors = User::where('is_active', 1)->get();
        $tags = Tag::where('active', 1)->get(); // Get all tags
        return view('admin.cours.create', compact('categories', 'niveaux', 'tags', 'langues', 'devises', 'instructors'));
    }

    // Store a new course
    public function cours_store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'short_description' => 'nullable|string',
            'categorie_id' => 'exists:categories,id',
            'niveau_id' => 'exists:niveaux,id',
            'langue_id' => 'exists:langues,id',
            'devise_id' => 'exists:devises,id',
            'prix' => 'nullable|numeric',
            'prix_promo' => 'nullable|numeric',
            'taux_reduction' => 'nullable|string|max:100',
            'duree' => 'nullable|string',
            'nombre_lesson' => 'nullable|integer',
            'certificat' => 'required|in:0,1',
            'nombre_quizz' => 'nullable|integer',
            'objectifs' => 'nullable|string',
            'prerequis' => 'nullable|string',
            'image' => 'nullable|image',
            'url_video' => 'nullable|url',
            'user_id' => 'exists:users,id',
            'active' => 'required|in:0,1',
            'etat' => 'required|in:0,1,2',

            'tags' => 'nullable|array', // Validate tags as an array
            'tags.*' => 'exists:tags,id', // Validate each tag ID
        ]);

        // Store image
        $imagePath = NULL;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/cours', 'public');
        }

        Cours::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'categorie_id' => $request->categorie_id,
            'niveau_id' => $request->niveau_id,
            'langue_id' => $request->langue_id,
            'devise_id' => $request->devise_id,
            'prix' => $request->prix,
            'prix_promo' => $request->prix_promo,
            'taux_reduction' => $request->taux_reduction,
            'duree' => $request->duree,
            'nombre_lesson' => $request->nombre_lesson,
            'certificat' => $request->certificat,
            'nombre_quizz' => $request->nombre_quizz,
            'objectifs' => $request->objectifs,
            'prerequis' => $request->prerequis,
            'image' => $imagePath,
            'url_video' => $request->url_video,
            'user_id' => $request->user_id,
            'active' => $request->active,
            'etat' => $request->etat,
        ]);

        // Attach selected tags to the course
        if ($request->has('tags')) {
            $cours->tags()->attach($request->tags);
        }
        
        return redirect()->route('admin.cours.list')->with('success', 'Course created successfully');
    }

    // Show the form to edit a course
    public function cours_edit($id)
    {
        $cours = Cours::findOrFail($id);
        $categories = Categorie::where('active', 1)->get();
        $niveaux = Niveau::where('active', 1)->get();
        $langues = Langue::where('active', 1)->get();
        $devises = Devise::where('active', 1)->get();
        $instructors = User::where('active', 1)->get();
        $tags = Tag::where('active', 1)->get(); // Get all tags
        return view('admin.cours.edit', compact('cours', 'categories', 'niveaux', 'tags', 'langues', 'devises', 'instructors'));
    }

    // Update the course
    public function cours_update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'short_description' => 'required|string',
            'categorie_id' => 'required|exists:categories,id',
            'niveau_id' => 'required|exists:niveaux,id',
            'langue_id' => 'required|exists:langues,id',
            'devise_id' => 'required|exists:devises,id',
            'prix' => 'required|numeric',
            'prix_promo' => 'nullable|numeric',
            'taux_reduction' => 'nullable|numeric|max:100',
            'duree' => 'required|integer',
            'nombre_lesson' => 'required|integer',
            'certificat' => 'required|in:0,1',
            'nombre_quizz' => 'required|integer',
            'objectifs' => 'required|string',
            'prerequis' => 'required|string',
            'image' => 'nullable|image',
            'url_video' => 'nullable|url',
            'user_id' => 'required|exists:users,id',
            'active' => 'required|in:0,1',
            'etat' => 'required|in:0,1,2',

            'tags' => 'nullable|array', // Validate tags as an array
            'tags.*' => 'exists:tags,id', // Validate each tag ID
        ]);

        $cours = Cours::findOrFail($id);

        // Store image if uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/cours', 'public');
            $cours->image = $imagePath;
        }

        $cours->update($request->all());

        // Sync selected tags (add new ones and remove the removed ones)
        if ($request->has('tags')) {
            $cours->tags()->sync($request->tags);
        }
        

        return redirect()->route('admin.cours.list')->with('success', 'Course updated successfully');
    }

    // Delete a course
    public function cours_destroy($id)
    {
        $cours = Cours::findOrFail($id);
        $cours->delete();

        return redirect()->route('admin.cours.list')->with('success', 'Course deleted successfully');
    }
    
    public function articles_list()
    {
        $articles = Article::all();
        return view('admin.articles.list', compact('articles'));
    }

    public function articles_create()
    {
        $categories = Categorie::where('active', 1)->get();
        $auteurs = User::where('active', 1)->get();
        $tags = Tag::where('active', 1)->get(); // Get all tags
        return view('admin.articles.create', compact('categories', 'tags', 'auteurs'));
    }

    // Store a new article
    public function articles_store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'categorie_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'image' => 'nullable|image',
            'active' => 'required|in:0,1',
            'etat' => 'required|in:0,1,2',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',  // Validate that each tag ID exists
        ]);

        // Store image and article data
        $imagePath = $request->file('image') ? $request->file('image')->store('images/articles', 'public') : null;

        $article = Article::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'categorie_id' => $request->categorie_id,
            'user_id' => $request->user_id,
            'image' => $imagePath,
            'active' => $request->active,
            'etat' => $request->etat,
        ]);

        // Attach selected tags to the article
        if ($request->has('tags')) {
            $article->tags()->attach($request->tags);
        }
        
        return redirect()->route('admin.articles.list')->with('success', 'article created successfully');
    }

    // Show the form to edit a article
    public function articles_edit($id)
    {
        $articles = Article::findOrFail($id);
        $categories = Categorie::where('active', 1)->get();
        $niveaux = Niveau::where('active', 1)->get();
        $langues = Langue::where('active', 1)->get();
        $devises = Devise::where('active', 1)->get();
        $instructors = User::where('active', 1)->get();
        $tags = Tag::where('active', 1)->get(); // Get all tags
        return view('admin.articles.edit', compact('articles', 'categories', 'niveaux', 'tags', 'langues', 'devises', 'instructors'));
    }

    // Update the article
    public function articles_update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'categorie_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'image' => 'nullable|image',
            'active' => 'required|in:0,1',
            'etat' => 'required|in:0,1,2',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',  // Validate that each tag ID exists
        ]);

        $articles = Article::findOrFail($id);

        // Store image if uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/articles', 'public');
            $articles->image = $imagePath;
        }

        $articles->update($request->all());

        // Sync selected tags (add new ones and remove the removed ones)
        if ($request->has('tags')) {
            $articles->tags()->sync($request->tags);
        }
        

        return redirect()->route('admin.articles.list')->with('success', 'article updated successfully');
    }

    // Delete a article
    public function articles_destroy($id)
    {
        $articles = Article::findOrFail($id);
        $articles->delete();

        return redirect()->route('admin.articles.list')->with('success', 'article deleted successfully');
    }

}
