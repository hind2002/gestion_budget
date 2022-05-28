<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\RevenuController;
use App\Http\Controllers\CategorieDepenseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/compte', [CompteController::class, 'show'])->name('compte.show')->middleware('auth');
Route::get('/compte/modifier/{compte}', [CompteController::class, 'showmodifier'])->name('compte.showmodifier')->middleware('auth');
Route::get('/compte/ajouter', [CompteController::class, 'Ajouter'])->name('compte.Ajouter')->middleware('auth');
Route::post('/compte/ajoutercompte', [CompteController::class, 'ajoutercompte'])->name('compte.ajoutercompte')->middleware('auth');
Route::post('/compte/modifiercompte/{compte}', [CompteController::class, 'modifierCompte'])->name('compte.modifiercompte')->middleware('auth');
Route::post('/compte/supprimer/{compte}', [CompteController::class, 'destroy'])->name('compte.destroy')->middleware('auth');
Route::get('/compte/detailles/{compte}', [CompteController::class, 'both'])->name('compte.both')->middleware('auth');
Route::get('/compte/ajouterrevenu', [RevenuController::class, 'index'])->name('revenu.index')->middleware('auth');
Route::get('/compte/ajouterdepenses', [CategorieDepenseController::class, 'index'])->name('depense.index')->middleware('auth');





// Route::get('/', function () {
//     return view('forms.revenu');
// });
