<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\AdminController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Route de changement de langue
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return redirect()->back();
});

// Routes avec localisation
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', [SiteController::class, 'home'])->name('home');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::post('/contact', [SiteController::class, 'store_contact'])->name('contacts.store');
    Route::get('/contact/success', [SiteController::class, 'contact_success'])->name('contact_success');
    Route::get('/cours', [SiteController::class, 'cours'])->name('cours');
    // Route::get('/cours/details', [SiteController::class, 'cours_details'])->name('cours-details');
    Route::get('/cours/{id}/details', [SiteController::class, 'cours_details'])->name('cours.details');

    Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
    Route::get('/blog/details/{id}', [SiteController::class, 'blog_details'])->name('blog-details');
    Route::get('/events', [SiteController::class, 'events'])->name('events');
    Route::get('/instructors', [SiteController::class, 'instructors'])->name('instructors');
    Route::get('/about', [SiteController::class, 'about'])->name('about');
    Route::get('/nos-services', [SiteController::class, 'services'])->name('services');
    Route::get('/tags/{tagId}/articles', [SiteController::class, 'showByTag'])->name('tags.articles');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Routes pour utilisateurs authentifiés
Route::middleware(['auth'])->group(function () {
    Route::post('/password/update', [AuthController::class, 'update_password'])->name('password.update');
    Route::post('/lock-screen', [AuthController::class, 'lockScreen'])->name('lockScreen');
    Route::post('/unlock-screen', [AuthController::class, 'unlockScreen'])->name('unlockScreen');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [AuthController::class, 'show_profile'])->name('profile.show');
    Route::put('/profile/update', [AuthController::class, 'update_profile'])->name('profile.update');

    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::post('/inscrire/{cours}', [SiteController::class, 'enroulement_cours'])->name('inscrire');
});

// Routes spécifiques aux étudiants
Route::middleware(['role:student'])->prefix('students')->name('students.')->group(function () {
    Route::get('/my_cours', [StudentController::class, 'my_cours'])->name('my_cours');
    Route::get('/panier', [StudentController::class, 'panier'])->name('panier');
    Route::get('/settings', [StudentController::class, 'settings'])->name('settings');
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
});

// Routes spécifiques aux instructeurs
Route::middleware(['role:instructor'])->prefix('instructors')->name('instructors.')->group(function () {
    Route::get('/my_cours', [InstructorController::class, 'my_cours'])->name('my_cours');
    Route::get('/create_cours', [InstructorController::class, 'create_cours'])->name('create_cours');
    Route::get('/settings', [InstructorController::class, 'settings'])->name('settings');
    Route::get('/dashboard', [InstructorController::class, 'dashboard'])->name('dashboard');
    Route::get('/my_articles', [InstructorController::class, 'my_articles'])->name('my_articles');
    Route::get('/create_articles', [InstructorController::class, 'create_articles'])->name('create_articles');
    Route::get('/reviews', [InstructorController::class, 'reviews'])->name('reviews');
});

// Routes spécifiques aux administrateurs
Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/reviews', [AdminController::class, 'reviews'])->name('reviews');
    Route::get('/instructors', [AdminController::class, 'instructors'])->name('instructors');
    Route::get('/students', [AdminController::class, 'students'])->name('students');
    Route::get('/contacts', [AdminController::class, 'contacts'])->name('contacts');

    Route::match(['get', 'post'], '/parametres', [AdminController::class, 'settings'])->name('settings');
    Route::get('/instructors/request', [AdminController::class, 'instructors_request'])->name('instructors_request');
    Route::get('/instructors/details', [AdminController::class, 'instructors_details'])->name('instructors_details');

    Route::get('/cours/enroulements', [AdminController::class, 'enroulements'])->name('cours.enroulements');
    Route::post('/cours/{id}/approve', [AdminController::class, 'approveCourse'])->name('cours.approve');
    Route::post('/cours/{id}/reject', [AdminController::class, 'rejectCourse'])->name('cours.reject');
    Route::post('/cours/{id}/toggle-status', [AdminController::class, 'toggleCourseStatus'])->name('cours.toggleStatus');
    Route::get('/search', [AdminController::class, 'search'])->name('search');

    Route::post('/articles/{id}/approve', [AdminController::class, 'approvearticle'])->name('articles.approve');
    Route::post('/articles/{id}/reject', [AdminController::class, 'rejectarticle'])->name('articles.reject');
    Route::post('/articles/{id}/toggle-status', [AdminController::class, 'togglearticleStatus'])->name('articles.toggleStatus');
    
    Route::post('/enroulements/{id}/approve', [AdminController::class, 'approveenroulement'])->name('enroulements.approve');
    Route::post('/enroulements/{id}/toggle-status', [AdminController::class, 'toggleenroulementstatus'])->name('enroulements.toggleStatus');

    // Gestion des entités (CRUD)
    $entities = ['pays', 'villes', 'slides', 'services', 'evenements', 'partenaires', 'devises', 'specialites', 'prerequis', 'niveaux', 'users', 'categories', 'tags', 'cours', 'langues', 'bureaux', 'articles'];
    foreach ($entities as $entity) {
        Route::prefix($entity)->name("$entity.")->group(function () use ($entity) {
            Route::get('/', [AdminController::class, "{$entity}_list"])->name('list');
            Route::get('/create', [AdminController::class, "{$entity}_create"])->name('create');
            Route::post('/', [AdminController::class, "{$entity}_store"])->name('store');
            Route::get('edit/{id}', [AdminController::class, "{$entity}_edit"])->name('edit');
            Route::get('{id}', [AdminController::class, "{$entity}_show"])->name('show');
            Route::put('{id}', [AdminController::class, "{$entity}_update"])->name('update');
            Route::delete('{id}', [AdminController::class, "{$entity}_destroy"])->name('destroy');
        });
    }
});



// Route::get('lang/{locale}', function ($locale) {
//     if (in_array($locale, ['en', 'fr'])) {
//         session(['locale' => $locale]);
//     }
//     return redirect()->back();
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Appliquer le middleware check.locked à toutes les routes du groupe
// Route::middleware(['auth', 'check.locked'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index']);
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/', function () {
//         return view('v1.dashboard');
//     })->name('dashboard');
// });

// Middleware pour plusieurs rôles
// Route::middleware(['role:admin,instructor'])->group(function () {
//     Route::get('/shared/dashboard', function () {
//         return view('shared.dashboard');
//     });
// });
