<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return redirect()->back();
});

Route::group(
    ['prefix' => LaravelLocalization::setLocale()],
    function () {

        // Route::get('/', function () {
        //     return view('welcome');
        // });

    Route::get('/', [SiteController::class, 'home'])->name('home');

    }
);

// Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/contact/success', [SiteController::class, 'contact_success'])->name('contact_success');
Route::post('/contact', [SiteController::class, 'store_contact'])->name('contacts.store');
Route::get('/cours', [SiteController::class, 'cours'])->name('cours');
Route::get('/cours/details', [SiteController::class, 'cours_details'])->name('cours-details');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/details', [SiteController::class, 'blog_details'])->name('blog-details');
Route::get('/events', [SiteController::class, 'events'])->name('events');
Route::get('/instructors', [SiteController::class, 'instructors'])->name('instructors');
Route::get('/about', [SiteController::class, 'about'])->name('about');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::prefix('backoffice')->name('backoffice.')->middleware('auth')->group(function () {
    
// });

Route::get('/students/my_cours', [StudentController::class, 'my_cours'])->name('students.my_cours');
Route::get('/students/panier', [StudentController::class, 'panier'])->name('students.panier');
Route::get('/students/settings', [StudentController::class, 'settings'])->name('students.settings');
Route::get('/students/dashboard', [StudentController::class, 'dashboard'])->name('students.dashboard');

Route::get('/instructors/my_cours', [InstructorController::class, 'my_cours'])->name('instructors.my_cours');
Route::get('/instructors/create_cours', [InstructorController::class, 'create_cours'])->name('instructors.create_cours');
Route::get('/instructors/settings', [InstructorController::class, 'settings'])->name('instructors.settings');
Route::get('/instructors/dashboard', [InstructorController::class, 'dashboard'])->name('instructors.dashboard');
Route::get('/instructors/my_articles', [InstructorController::class, 'my_articles'])->name('instructors.my_articles');
Route::get('/instructors/create_articles', [InstructorController::class, 'create_articles'])->name('instructors.create_articles');
Route::get('/instructors/reviews', [InstructorController::class, 'reviews'])->name('instructors.reviews');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/reviews', [AdminController::class, 'reviews'])->name('admin.reviews');
Route::get('/admin/cours', [AdminController::class, 'cours'])->name('admin.cours');
Route::get('/admin/cours/create', [AdminController::class, 'cours_create'])->name('admin.cours_create');
Route::get('/admin/cours_categorie', [AdminController::class, 'cours_categorie'])->name('admin.cours_categorie');
Route::get('/admin/details_cours', [AdminController::class, 'details_cours'])->name('admin.details_cours');
Route::get('/admin/articles', [AdminController::class, 'articles'])->name('admin.articles');
Route::get('/admin/articles/create', [AdminController::class, 'articles_create'])->name('admin.articles_create');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/instructors', [AdminController::class, 'instructors'])->name('admin.instructors');
Route::get('/admin/instructors/request', [AdminController::class, 'instructors_request'])->name('admin.instructors_request');
Route::get('/admin/instructors/details', [AdminController::class, 'instructors_details'])->name('admin.instructors_details');
Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');
Route::get('/admin/contacts', [AdminController::class, 'contacts'])->name('admin.contacts');

// Route::get('lang/{locale}', function ($locale) {
//     if (in_array($locale, ['en', 'fr'])) {
//         session(['locale' => $locale]);
//     }
//     return redirect()->back();
// });

// Route::get('/', function () {
//     return view('welcome');
// });
