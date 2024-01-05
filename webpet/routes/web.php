<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');
    Route::get('article', [ArticleController::class, 'index'])->middleware(['auth'])->name('article');
    Route::get('adoption', [AdoptionController::class, 'index'])->middleware(['auth'])->name('adoption');
    Route::get('donation', [DonationController::class, 'index'])->middleware(['auth'])->name('donation');
    Route::get('contact', [ContactController::class, 'index'])->middleware(['auth'])->name('contact');
    Route::get('profil', [ProfilController::class, 'index'])->middleware(['auth'])->name('profil');
    Route::get('search', [SearchController::class, 'index'])->middleware(['auth'])->name('search');
});


require __DIR__.'/auth.php';
