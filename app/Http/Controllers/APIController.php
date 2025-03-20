<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pays;
use App\Models\Ville;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class APIController extends Controller
{
    // Enregistrement d'un nouvel utilisateur
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(['access_token' => $token, 'token_type' => 'Bearer'], 201);
    }

    // Connexion d'un utilisateur
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid login details'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        return response()->json(['access_token' => $token, 'token_type' => 'Bearer']);
    }

    // Déconnexion d'un utilisateur
    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

     // Create a new Pays
     public function pays_store(Request $request)
     {
         $request->validate([
             'nom' => 'required|string',
             'code_iso' => 'required|string|size:3',
             'indicatif' => 'required|string',
             'nationnalite' => 'required|string',
             'active' => 'boolean',
         ]);
 
         $pays = Pays::create([
             'nom' => $request->nom,
             'code_iso' => $request->code_iso,
             'indicatif' => $request->indicatif,
             'nationnalite' => $request->nationnalite,
             'active' => $request->active ?? true,  // Default to true if not provided
         ]);
 
         return response()->json($pays, 201);
     }
 
     // Get all Pays
     public function pays_index()
     {
         $pays = Pays::all();
         return response()->json($pays);
     }
 
     // Get a single Pays by ID
     public function pays_show($id)
     {
         $pays = Pays::find($id);
 
         if (!$pays) {
             return response()->json(['message' => 'Pays not found'], 404);
         }
 
         return response()->json($pays);
     }
 
     // Update a Pays
     public function pays_update(Request $request, $id)
     {
         $request->validate([
             'nom' => 'sometimes|required|string',
             'code_iso' => 'sometimes|required|string|size:3',
             'indicatif' => 'sometimes|required|string',
             'nationnalite' => 'sometimes|required|string',
             'active' => 'sometimes|boolean',
         ]);
 
         $pays = Pays::find($id);
 
         if (!$pays) {
             return response()->json(['message' => 'Pays not found'], 404);
         }
 
         $pays->update($request->all());
         return response()->json($pays);
     }
 
     // Delete a Pays
     public function pays_destroy($id)
     {
         $pays = Pays::find($id);
 
         if (!$pays) {
             return response()->json(['message' => 'Pays not found'], 404);
         }
 
         $pays->delete();
         return response()->json(['message' => 'Pays deleted successfully']);
     }


 // Create a new Ville
 public function villes_store(Request $request)
 {
     $request->validate([
         'pays_id' => 'required|exists:pays,id',
         'nom' => 'required|string',
         'active' => 'boolean',
     ]);

     $ville = Ville::create([
         'pays_id' => $request->pays_id,
         'nom' => $request->nom,
         'active' => $request->active ?? true,  // Default to true if not provided
     ]);

     return response()->json($ville, 201);
 }

 // Get all Villes
 public function villes_index()
 {
     $villes = Ville::all();
     return response()->json($villes);
 }

 // Get a single Ville by ID
 public function villes_show($id)
 {
     $ville = Ville::find($id);

     if (!$ville) {
         return response()->json(['message' => 'Ville not found'], 404);
     }

     return response()->json($ville);
 }

 // Update a Ville
 public function villes_update(Request $request, $id)
 {
     $request->validate([
         'pays_id' => 'sometimes|required|exists:pays,id',
         'nom' => 'sometimes|required|string',
         'active' => 'sometimes|boolean',
     ]);

     $ville = Ville::find($id);

     if (!$ville) {
         return response()->json(['message' => 'Ville not found'], 404);
     }

     $ville->update($request->all());
     return response()->json($ville);
 }

 // Delete a Ville
 public function villes_destroy($id)
 {
     $ville = Ville::find($id);

     if (!$ville) {
         return response()->json(['message' => 'Ville not found'], 404);
     }

     $ville->delete();
     return response()->json(['message' => 'Ville deleted successfully']);
 }

 
}
