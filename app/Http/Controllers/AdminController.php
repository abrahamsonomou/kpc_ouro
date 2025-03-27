<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

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
use App\Models\Specialite;
use App\Models\Prerequis;
use App\Models\Slide;
use App\Models\Service;
use App\Models\Partenaire;

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

//     public function settings(Request $request)
// {
//     // Récupère le premier enregistrement de Parametre ou crée un nouvel enregistrement par défaut
//     $parametre = Parametre::firstOrCreate([]);

//     // Si la requête est de type POST, on met à jour les valeurs
//     if ($request->isMethod('post')) {
//         $request->validate([
//             'telephone' => 'required|string|max:20',
//             'email' => 'required|email|max:255',
//             'copyright' => 'nullable|string',
//             'twitter_link' => 'nullable|url|max:255',
//             'facebook_link' => 'nullable|url|max:255',
//             'instagram_link' => 'nullable|url|max:255',
//             'linkedln_link' => 'nullable|url|max:255',
//             'youtube_link' => 'nullable|url|max:255',
//             'site_name' => 'nullable|string',
            
//             'logo' => 'nullable|image|max:2048', // Max 2MB
//             'favicon' => 'nullable|image|max:512', // Max 512KB
//             'logo_footer' => 'nullable|image|max:2048', // Max 2MB
//         ]);

//         // Gestion des fichiers (logo, favicon, logo_footer)
//         if ($request->hasFile('logo')) {
//             if ($parametre->logo) {
//                 Storage::disk('public')->delete($parametre->logo);
//             }
//             $parametre->logo = $request->file('logo')->store('images/settings', 'public');
//         }

//         if ($request->hasFile('favicon')) {
//             if ($parametre->favicon) {
//                 Storage::disk('public')->delete($parametre->favicon);
//             }
//             $parametre->favicon = $request->file('favicon')->store('images/settings', 'public');
//         }

//         if ($request->hasFile('logo_footer')) {
//             if ($parametre->logo_footer) {
//                 Storage::disk('public')->delete($parametre->logo_footer);
//             }
//             $parametre->logo_footer = $request->file('logo_footer')->store('images/settings', 'public');
//         }

//         // Mise à jour des autres paramètres
//         $parametre->update($request->only([
//             'telephone', 'email', 'twitter_link', 'facebook_link',
//             'instagram_link', 'linkedln_link', 'youtube_link'
//         ]));

//         return redirect()->route('admin.settings')->with('success', 'Paramètres mis à jour avec succès.');
//     }

//     return view('admin.settings', compact('parametre'));
// }

public function settings(Request $request)
{
    $parametre = Parametre::firstOrCreate([]);

    if ($request->isMethod('post')) {
        $request->validate([
            'site_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'telephone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'email2' => 'nullable|email|max:255',
            'copyright' => 'nullable|string|max:255',
            'twitter_link' => 'nullable|url|max:255',
            'facebook_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
            'linkedin_link' => 'nullable|url|max:255',
            'youtube_link' => 'nullable|url|max:255',

            'logo' => 'nullable|image|max:2048',
            'favicon' => 'nullable|image|max:512',
            'logo_footer' => 'nullable|image|max:2048',
            'default_avatar_user' => 'nullable|image|max:2048',
            'default_avatar_student' => 'nullable|image|max:2048',
            'default_avatar_instructor' => 'nullable|image|max:2048',
        ]);

        $fieldsToUpdate = $request->only([
            'site_name', 'description', 'telephone', 'email', 'email2', 'copyright',
            'twitter_link', 'facebook_link', 'instagram_link', 'linkedin_link', 'youtube_link'
        ]);

        // Handling file uploads
        $imageFields = ['logo', 'favicon', 'logo_footer', 'default_avatar_user', 'default_avatar_student', 'default_avatar_instructor'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                if ($parametre->$field) {
                    Storage::disk('public')->delete($parametre->$field);
                }
                $fieldsToUpdate[$field] = $request->file($field)->store('images/settings', 'public');
            }
        }

        $parametre->update($fieldsToUpdate);

        return redirect()->route('admin.settings')->with('success', 'Settings updated successfully.');
    }

    return view('admin.settings', compact('parametre'));
}

    public function instructors()
    {
        $instructors = User::where('is_active', 1)->where('role', 'instructor')->get();
        return view('admin.instructors', compact('instructors'));
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
        $students = User::where('is_active', 1)->where('role', 'student')->get();
        return view('admin.students', compact('students'));
    }

    public function contacts()
    {
        // $contacts = Contact::latest()->get();
        $contacts = 1;
        return view('admin.list_contacts', compact('contacts'));
    }

                // Display all partenaires

                public function partenaires_list()
                {
                    $partenaires = Partenaire::all();
                    return view('admin.partenaires.list', compact('partenaires'));
                }
            
                //
            
                // Show the form to create a new prerequi
                public function partenaires_create()
                {
                    return view('admin.partenaires.create');
                }
            
                // Store a new prerequi
                public function partenaires_store(Request $request)
                {
                    $request->validate([
                        'nom' => 'required|string|unique:partenaires,nom',
                        'description' => 'nullable|string',
                        'logo' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                        'ordre' => 'nullable|integer',
                        'active' => 'required|in:0,1',
                    ]);
            
                    $data = $request->all();
    
                    if ($request->hasFile('logo')) {
                        $data['logo'] = $request->file('logo')->store('partenaires', 'public');
                    }
            
                    Partenaire::create($data);
            
                    return redirect()->route('admin.partenaires.list')->with('success', 'prerequi created successfully');
                }
            
                // Show the form to edit a prerequi
                public function partenaires_edit($id)
                {
                    $partenaire = Partenaire::findOrFail($id);
                    return view('admin.partenaires.edit', compact('partenaire'));
                }
            
                // Update the prerequi
                public function partenaires_update(Request $request, $id)
                {
                    $request->validate([
                        'nom' => 'sometimes|required|string|unique:partenaires,nom,' . $id,
                        'description' => 'nullable|string',
                        'logo' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                        'ordre' => 'nullable|integer',
                        'active' => 'required|in:0,1',
                    ]);
            
                    $partenaire = Partenaire::findOrFail($id);
                    $data = $request->all();
            
                    if ($request->hasFile('logo')) {
                        // Delete old logo
                        if ($partenaire->logo) {
                            Storage::disk('public')->delete($partenaire->logo);
                        }
                        $data['logo'] = $request->file('logo')->store('partenaires', 'public');
                    }
            
                    $partenaire->update($data);
            
                    return redirect()->route('admin.partenaires.list')->with('success', 'prerequi updated successfully');
                }
            
                public function partenaires_show($id)
                {
                    $partenaire = Partenaire::findOrFail($id);
                    return view('admin.partenaires.show', compact('partenaire'));
                }
            
                // Delete a prerequi
                public function partenaires_destroy($id)
                {
                    $partenaire = Partenaire::findOrFail($id);
                    if ($partenaire->logo) {
                        Storage::disk('public')->delete($partenaire->logo);
                    }
                    $partenaire->delete();
            
            
                    return redirect()->route('admin.partenaires.list')->with('success', 'partenaires deleted successfully');
                }

                // Display all services

                public function services_list()
                {
                    $services = Service::all();
                    return view('admin.services.list', compact('services'));
                }
            
                //
            
                // Show the form to create a new prerequi
                public function services_create()
                {
                    return view('admin.services.create');
                }
            
                // Store a new prerequi
                public function services_store(Request $request)
                {
                    $request->validate([
                        'titre' => 'required|string|unique:services,titre',
                        'description' => 'nullable|string',
                        'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                        'ordre' => 'nullable|integer',
                        'active' => 'required|in:0,1',
                    ]);
            
                    $data = $request->all();
    
                    if ($request->hasFile('image')) {
                        $data['image'] = $request->file('image')->store('services', 'public');
                    }
            
                    Service::create($data);
            
                    return redirect()->route('admin.services.list')->with('success', 'prerequi created successfully');
                }
            
                // Show the form to edit a prerequi
                public function services_edit($id)
                {
                    $service = Service::findOrFail($id);
                    return view('admin.services.edit', compact('service'));
                }
            
                // Update the prerequi
                public function services_update(Request $request, $id)
                {
                    $request->validate([
                        'titre' => 'sometimes|required|string|unique:services,titre,' . $id,
                        'description' => 'nullable|string',
                        'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                        'ordre' => 'nullable|integer',
                        'active' => 'required|in:0,1',
                    ]);
            
                    $service = Service::findOrFail($id);
                    $data = $request->all();
            
                    if ($request->hasFile('image')) {
                        // Delete old image
                        if ($service->image) {
                            Storage::disk('public')->delete($service->image);
                        }
                        $data['image'] = $request->file('image')->store('services', 'public');
                    }
            
                    $service->update($data);
            
                    return redirect()->route('admin.services.list')->with('success', 'prerequi updated successfully');
                }
            
                public function services_show($id)
                {
                    $service = Service::findOrFail($id);
                    return view('admin.services.show', compact('service'));
                }
            
                // Delete a prerequi
                public function services_destroy($id)
                {
                    $service = Service::findOrFail($id);
                    if ($service->image) {
                        Storage::disk('public')->delete($service->image);
                    }
                    $service->delete();
            
            
                    return redirect()->route('admin.services.list')->with('success', 'services deleted successfully');
                }

            // Display all slides

            public function slides_list()
            {
                $slides = Slide::all();
                return view('admin.slides.list', compact('slides'));
            }
        
            //
        
            // Show the form to create a new prerequi
            public function slides_create()
            {
                return view('admin.slides.create');
            }
        
            // Store a new prerequi
            public function slides_store(Request $request)
            {
                $request->validate([
                    'titre' => 'required|string|unique:slides,titre',
                    'description' => 'nullable|string',
                    'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'ordre' => 'nullable|integer',
                    'active' => 'required|in:0,1',
                ]);
        
                $data = $request->all();

                if ($request->hasFile('image')) {
                    $data['image'] = $request->file('image')->store('slides', 'public');
                }
        
                Slide::create($data);
        
                return redirect()->route('admin.slides.list')->with('success', 'prerequi created successfully');
            }
        
            // Show the form to edit a prerequi
            public function slides_edit($id)
            {
                $slide = Slide::findOrFail($id);
                return view('admin.slides.edit', compact('slide'));
            }
        
            // Update the prerequi
            public function slides_update(Request $request, $id)
            {
                $request->validate([
                    'titre' => 'sometimes|required|string|unique:slides,titre,' . $id,
                    'description' => 'nullable|string',
                    'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'ordre' => 'nullable|integer',
                    'active' => 'required|in:0,1',
                ]);
        
                $slide = Slide::findOrFail($id);
                $data = $request->all();
        
                if ($request->hasFile('image')) {
                    // Delete old image
                    if ($slide->image) {
                        Storage::disk('public')->delete($slide->image);
                    }
                    $data['image'] = $request->file('image')->store('slides', 'public');
                }
        
                $slide->update($data);
        
                return redirect()->route('admin.slides.list')->with('success', 'prerequi updated successfully');
            }
        
            public function slides_show($id)
            {
                $slide = Slide::findOrFail($id);
                return view('admin.slides.show', compact('slide'));
            }
        
            // Delete a prerequi
            public function slides_destroy($id)
            {
                $slide = Slide::findOrFail($id);
                if ($slide->image) {
                    Storage::disk('public')->delete($slide->image);
                }
                $slide->delete();
        
        
                return redirect()->route('admin.slides.list')->with('success', 'slides deleted successfully');
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

    // Display all Specialite

    public function specialites_list()
    {
        $specialites = Specialite::all();
        return view('admin.specialites.list', compact('specialites'));
    }

    //

    // Show the form to create a new specialite
    public function specialites_create()
    {
        return view('admin.specialites.create');
    }

    // Store a new specialite
    public function specialites_store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|unique:specialites,nom',
            'active' => 'required|in:0,1',
        ]);

        Specialite::create($request->all());

        return redirect()->route('admin.specialites.list')->with('success', 'specialite created successfully');
    }

    // Show the form to edit a specialite
    public function specialites_edit($id)
    {
        $specialite = Specialite::findOrFail($id);
        return view('admin.specialites.edit', compact('specialite'));
    }

    // Update the Specialite
    public function specialites_update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'sometimes|required|string|unique:specialites,nom,' . $id,
            'active' => 'required|in:0,1',
        ]);

        $specialite = Specialite::findOrFail($id);
        $specialite->update($request->all());

        return redirect()->route('admin.specialites.list')->with('success', 'specialite updated successfully');
    }

    public function specialites_show($id)
    {
        $specialite = Specialite::findOrFail($id);
        return view('admin.specialites.show', compact('specialite'));
    }

    // Delete a specialite
    public function specialites_destroy($id)
    {
        $specialite = Specialite::findOrFail($id);
        $specialite->delete();

        return redirect()->route('admin.specialites.list')->with('success', 'Specialite deleted successfully');
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

        // Display all Prerequis

        public function prerequis_list()
        {
            $prerequis = Prerequis::all();
            return view('admin.prerequis.list', compact('prerequis'));
        }
    
        //
    
        // Show the form to create a new prerequi
        public function prerequis_create()
        {
            return view('admin.prerequis.create');
        }
    
        // Store a new prerequi
        public function prerequis_store(Request $request)
        {
            $request->validate([
                'nom' => 'required|string|unique:prerequis,nom',
                'active' => 'required|in:0,1',
            ]);
    
            Prerequis::create($request->all());
    
            return redirect()->route('admin.prerequis.list')->with('success', 'prerequi created successfully');
        }
    
        // Show the form to edit a prerequi
        public function prerequis_edit($id)
        {
            $item = Prerequis::findOrFail($id);
            return view('admin.prerequis.edit', compact('item'));
        }
    
        // Update the prerequi
        public function prerequis_update(Request $request, $id)
        {
            $request->validate([
                'nom' => 'sometimes|required|string|unique:prerequis,nom,' . $id,
                'active' => 'required|in:0,1',
            ]);
    
            $prerequi = Prerequis::findOrFail($id);
            $prerequi->update($request->all());
    
            return redirect()->route('admin.prerequis.list')->with('success', 'prerequi updated successfully');
        }
    
        public function prerequis_show($id)
        {
            $item = Prerequis::findOrFail($id);
            return view('admin.prerequis.show', compact('item'));
        }
    
        // Delete a prerequi
        public function prerequis_destroy($id)
        {
            $prerequi = Prerequis::findOrFail($id);
            $prerequi->delete();
    
            return redirect()->route('admin.prerequis.list')->with('success', 'prerequis deleted successfully');
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
        $specialites = Specialite::all();
        return view('admin.users.create', compact('pays', 'villes', 'specialites'));
    }

    // Store a new user
    public function users_store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'telephone' => 'nullable|string',
            'date_naissance' => 'nullable|date',
            'adresse1' => 'nullable|string',
            'adresse2' => 'nullable|string',
            'pays_id' => 'exists:pays,id',
            'ville_id' => 'exists:villes,id',
            'specialite_id' => 'exists:specialites,id',
            'bio' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'nullable|string',
            'is_admin' => 'in:0,1',
            'is_active' => 'in:0,1',
            'is_othor' => 'in:0,1',
            'approuve_cours' => 'in:0,1',
        ]);
        
        // $user = new User($request->all());

        if ($request->hasFile('avatar')) {
            $fileExtension = $request->file('avatar')->getClientOriginalExtension();
            $fileName = pathinfo($request->file('avatar')->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $fileName.'_'.uniqid().'_'.time().'.'.$fileExtension;
            $request->file('avatar')->storeAs('public/users/avatar', $fileName);
            $validatedData['avatar'] = $fileName;
        }

        $validatedData['password'] = Hash::make($request->password);

        $user = User::create($validatedData);
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
        $specialites = Specialite::all();
        return view('admin.users.edit', compact('user', 'pays', 'villes', 'specialites'));
    }

    // Update a user
    public function users_update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:users,email,' . $id,
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'telephone' => 'nullable|string',
            'date_naissance' => 'nullable|date',
            'adresse1' => 'nullable|string',
            'adresse2' => 'nullable|string',
            'pays_id' => 'exists:pays,id',
            'ville_id' => 'exists:villes,id',
            'specialite_id' => 'exists:specialites,id',
            'bio' => 'nullable|string',
            'role' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_admin' => 'in:0,1',
            'is_active' => 'in:0,1',
            'is_othor' => 'in:0,1',
            'approuve_cours' => 'in:0,1',
        ]);

        $user = User::findOrFail($id);

        if ($request->hasFile('avatar')) {
            $fileExtension = $request->file('avatar')->getClientOriginalExtension();
            $fileName = pathinfo($request->file('avatar')->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $fileName.'_'.uniqid().'_'.time().'.'.$fileExtension;
            $request->file('avatar')->storeAs('public/users/avatar', $fileName);
            $validatedData['avatar'] = $fileName;
        }

        $validatedData['password'] = Hash::make($request->password);

        $user->update($validatedData);
        $user->save();

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
        // $categories = Categorie::all();

        // Retrieve categories with the count of related courses
        $categories = Categorie::withCount('cours')->get();

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
        // Retrieve all courses
        // $cours = Cours::all();
    
            // Fetch courses with pagination (10 per page)
        $cours = Cours::paginate(1); 

        // Count the total number of courses
        $totalCours = Cours::count();

        // Count the number of activated courses (etat = 1)
        $activatedCours = Cours::where('etat', 1)->count();

        // Count the number of pending courses (etat = 0)
        $pendingCours = Cours::where('etat', 0)->count();
    
        // Count the number of rejected courses (etat = 2)
        $rejectedCours = Cours::where('etat', 2)->count();

        // Pass the courses and counts to the view
        return view('admin.cours.list', compact('cours', 'totalCours', 'activatedCours', 'pendingCours', 'rejectedCours'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        if ($query) {
            // If there's a query, search for courses
            $courses = Cours::where('titre', 'like', '%' . $query . '%')
                            ->orWhere('description', 'like', '%' . $query . '%')
                            ->get();
        } else {
            // If there's no query, return all courses
            $courses = Cours::all();
        }
    
        return response()->json($courses);
    }
    

    public function cours_create()
    {
        $categories = Categorie::where('active', 1)->
        where('is_cours', 1)->get();
        $niveaux = Niveau::where('active', 1)->get();
        $langues = Langue::where('active', 1)->get();
        $devises = Devise::where('active', 1)->get();
        $instructors = User::where('is_active', 1)->where('role', 'instructor')->get();

        $tags = Tag::where('active', 1)->
        where('is_cours', 1)->get();
        $prerequis = Prerequis::where('active', 1)->get(); // Get all prerequis
        return view('admin.cours.create', compact('categories', 'niveaux', 'tags', 'prerequis', 'langues', 'devises', 'instructors'));
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
            'image' => 'nullable|image',
            'url_video' => 'nullable|url',
            'user_id' => 'exists:users,id',
            'active' => 'required|in:0,1',
            'etat' => 'required|in:0,1,2',
            'top' => 'nullable|in:0,1',
            
            'tags' => 'nullable|array', // Validate tags as an array
            'tags.*' => 'exists:tags,id', // Validate each tag ID

            'prerequis' => 'nullable|array', // Validate prerequis as an array
            'prerequis.*' => 'exists:prerequis,id', // Validate each prerequis ID
        ]);

        // Store image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/cours', 'public');
        }

        $cours = Cours::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'categorie_id' => $request->categorie_id,
            'niveau_id' => $request->niveau_id,
            'langue_id' => $request->langue_id,
            'devise_id' => $request->devise_id,
            'prix' => $request->prix,
            'prix_promo' => $request->prix_promo,
            'top' => $request->top,
            'taux_reduction' => $request->taux_reduction,
            'duree' => $request->duree,
            'nombre_lesson' => $request->nombre_lesson,
            'certificat' => $request->certificat,
            'nombre_quizz' => $request->nombre_quizz,
            'objectifs' => $request->objectifs,
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

        if ($request->has('prerequis')) {
            $cours->prerequis()->attach($request->prerequis);
        }

        return redirect()->route('admin.cours.list')->with('success', 'Course created successfully');
    }

    // Show the form to edit a course
    public function cours_edit($id)
    {
        $cours = Cours::findOrFail($id); // Trouver le cours par ID
        $categories = Categorie::where('active', 1)->
        where('is_cours', 1)->get();
        $instructors = User::where('role', 'instructor')->get(); // Filtrer les instructeurs
        $devises = Devise::all();
        $langues = Langue::all();
        $niveaux = Niveau::all();
        $tags = Tag::where('active', 1)->
        where('is_cours', 1)->get();
        $prerequis = Prerequis::where('active', 1)->get(); // Get all prerequis

        return view('admin.cours.edit', compact('cours', 'categories', 'instructors', 'devises', 'prerequis', 'langues', 'niveaux', 'tags'));
    }

    // Update the course
    public function cours_update(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'short_description' => 'nullable|string|max:500',
            'categorie_id' => 'nullable|exists:categories,id',
            'niveau_id' => 'nullable|exists:niveaux,id',
            'langue_id' => 'nullable|exists:langues,id',
            'devise_id' => 'nullable|exists:devises,id',
            'prix' => 'nullable|numeric|min:0',
            'prix_promo' => 'nullable|numeric|min:0',
            'taux_reduction' => 'nullable|numeric|min:0|max:100',
            'duree' => 'nullable|string',
            'nombre_lesson' => 'nullable|integer|min:0',
            'certificat' => 'nullable|boolean',
            'nombre_quizz' => 'nullable|integer|min:0',
            'objectifs' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // Limite de 2MB
            'url_video' => 'nullable|url',
            'user_id' => 'required|exists:users,id',
            'active' => 'nullable|boolean',
            'top' => 'nullable|boolean',
            'etat' => 'nullable|in:0,1,2',
    
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
    
            'prerequis' => 'nullable|array',
            'prerequis.*' => 'exists:prerequis,id',
        ]);
    
        // Trouver le cours ou échouer
        $cours = Cours::findOrFail($id);
    
        // Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($cours->image) {
                Storage::disk('public')->delete($cours->image);
            }
    
            // Enregistrer la nouvelle image
            $imagePath = $request->file('image')->store('images/cours', 'public');
            $cours->image = $imagePath;
        }
    
        // Mise à jour des champs du cours
        $cours->update($request->only([
            'titre', 'description', 'short_description', 'categorie_id', 'niveau_id', 
            'langue_id', 'devise_id', 'prix', 'prix_promo', 'taux_reduction', 'duree', 
            'nombre_lesson', 'certificat', 'nombre_quizz', 'objectifs', 'url_video', 
            'user_id', 'active', 'top', 'etat'
        ]));
    
        // Mise à jour des tags et prérequis
        $cours->tags()->sync($request->tags ?? []);
        $cours->prerequis()->sync($request->prerequis ?? []);
    
        // Redirection avec message de succès
        return redirect()->route('admin.cours.list')->with('success', 'Course updated successfully');
    }

    public function approveCourse($id, Request $request)
    {
        $cours = Cours::findOrFail($id);

        // Valider le commentaire si fourni
        $request->validate([
            'commentaire' => 'nullable|string|max:255',
        ]);

        $cours->etat = 1; // Approuver le cours
        $cours->commentaire = $request->input('commentaire') ?? 'Approved'; // Ajouter le commentaire
        $cours->save();

        return redirect()->route('admin.cours.list')->with('success', 'Course approved successfully');
    }

    public function rejectCourse($id, Request $request)
    {
        $cours = Cours::findOrFail($id);

        // Valider le commentaire si fourni
        $request->validate([
            'commentaire' => 'nullable|string|max:255',
        ]);

        $cours->etat = 2; // Rejeter le cours
        $cours->commentaire = $request->input('commentaire') ?? 'Rejected'; // Ajouter le commentaire
        $cours->save();

        return redirect()->route('admin.cours.list')->with('success', 'Course rejected successfully');
    }

    public function toggleCourseStatus($id)
    {
        $cours = Cours::findOrFail($id);

        // Activer ou désactiver le cours
        if ($cours->active == 0) {
            $cours->active = 1; // Activer
        } else {
            $cours->active = 0; // Désactiver
        }

        $cours->save();

        return redirect()->route('admin.cours.list')->with('success', 'Course has been successfully');
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

           // Count the articles created by the authenticated user
        $articleCount = $articles->count();

        return view('admin.articles.list', compact('articles', 'articleCount'));
    }

    public function articles_create()
    {
        $categories = Categorie::where('active', 1)->
                                where('is_article', 1)->get();
        $auteurs = User::where('is_othor', 1)->
                        where('is_active', 1)->get();
        $tags = Tag::where('active', 1)->
                        where('is_article', 1)->get();
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
            'active' => 'in:0,1',
            'etat' => 'in:0,1,2',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id', // Validate that each tag ID exists
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
        $article = Article::findOrFail($id);
        $categories = Categorie::where('active', 1)->
                 where('is_article', 1)->get();
        $auteurs = User::where('is_othor', 1)->
                 where('is_active', 1)->get();
        $tags = Tag::where('active', 1)->
             where('is_article', 1)->get();
        return view('admin.articles.edit', compact('article', 'categories', 'tags', 'auteurs'));
    }

    // Update the article
    public function articles_update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:1024',
            'active' => 'required|boolean',
            'etat' => 'in:0,1,2',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id', // Validate that each tag ID exists
        ]);
    
        // Update the article's details
        $article->titre = $request->titre;
        $article->description = $request->description;
        $article->categorie_id = $request->categorie_id;
        $article->active = $request->active;
        $article->user_id = $request->user_id;

        // Handle image upload (if a new image is provided)
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($article->image) {
                \Storage::delete('public/' . $article->image);
            }
            // Store the new image
            $imagePath = $request->file('image')->store('articles', 'public');
            $article->image = $imagePath;
        }
    
        $article->save(); // Save the updated article
        
        // Sync selected tags (add new ones and remove the removed ones)
        if ($request->has('tags')) {
            $article->tags()->sync($request->tags);
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

    public function articles_show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.show', compact('article'));
    }

    public function approvearticle($id, Request $request)
    {
        $articles = Article::findOrFail($id);

        // Valider le commentaire si fourni
        $request->validate([
            'commentaire' => 'nullable|string|max:255',
        ]);

        $articles->etat = 1; // Approuver le articles
        $articles->commentaire = $request->input('commentaire') ?? 'Approved'; // Ajouter le commentaire
        $articles->save();

        return redirect()->route('admin.articles.list')->with('success', 'article approved successfully');
    }

    public function rejectarticle($id, Request $request)
    {
        $articles = Article::findOrFail($id);

        // Valider le commentaire si fourni
        $request->validate([
            'commentaire' => 'nullable|string|max:255',
        ]);

        $articles->etat = 2; // Rejeter le articles
        $articles->commentaire = $request->input('commentaire') ?? 'Rejected'; // Ajouter le commentaire
        $articles->save();

        return redirect()->route('admin.articles.list')->with('success', 'article rejected successfully');
    }

    public function togglearticleStatus($id)
    {
        $articles = Article::findOrFail($id);

        // Activer ou désactiver le articles
        if ($articles->active == 0) {
            $articles->active = 1; // Activer
        } else {
            $articles->active = 0; // Désactiver
        }

        $articles->save();

        return redirect()->route('admin.articles.list')->with('success', 'article has been successfully');
    }


}
