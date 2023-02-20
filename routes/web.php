<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TypeFormationController;
use App\Http\Controllers\ReferentielController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/log', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('registration', [AuthController::class, 'registration'])->name('register');

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// Nouvelles routes

Route::get('/', [TypeFormationController::class, 'index'])->name('type');

Route::get('nouv-referentiel', [ReferentielController::class, 'create'])->name('referentiel.create');

Route::post('nouv-referentiel', [ReferentielController::class, 'store'])->name('referentiel.store');

// 

Route::get('/types/{id}', [TypeFormationController::class, 'show'])->whereNumber('id');

Route::get('/referentiels/{id}', [ReferentielController::class, 'show'])->whereNumber('id');

Route::get('/formations/{id}', [FormationController::class,'show'])->whereNumber('id');

Route::post('/add-candidat', [EtudiantController::class,'store'])->name('candidat.store');

Route::get('/candidat-par-formation', [FormationController::class, 'candidatParFormation']);

Route::get('/formation-par-referentiel',[ReferentielController::class, 'formationParRef']);

Route::get('/formation-par-type',[TypeFormationController::class, 'formationParType']);

Route::get('/candidats-par-sexe',[EtudiantController::class,'repartitionParSexe']);

Route::get('/tranche-age', [EtudiantController::class, 'trancheAge']);