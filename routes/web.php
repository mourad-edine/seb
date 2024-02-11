<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutController;
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
Route::post('/admin/categorie',[AdminController::class, 'CreateCategorie'])->name('Create_categorie');
Route::get('/admin/categorie',[AdminController::class, 'Categorie'])->name('categorie_metier');

Route::get('/',[AutController::class, 'index'])->name('home');
Route::get('/candidat',[AutController::class, 'index2'])->name('candidat');
Route::get('/attente',[AutController::class, 'wait'])->name('wait');
Route::get('/admin',[AdminController::class, 'Admin'])->name('administration');
Route::get('/admin/contactlist',[AdminController::class, 'Contact'])->name('contactlist');
Route::get('/admin/entreprise-list',[AdminController::class, 'Entreprise'])->name('entrepriselist');
Route::get('/admin/information/{id}',[AdminController::class, 'Info'])->name('information_demande');
Route::get('/admin/detail/{id}',[AdminController::class, 'Detail'])->name('detail_fiche');
Route::post('/admin/qualification/{id}',[AdminController::class, 'CreateQualification'])->name('Create_qualification');
Route::get('/admin/qualification/{id}',[AdminController::class, 'Qualif'])->name('qualification');
Route::post('/admin/diplome',[AdminController::class, 'CreateDiplome'])->name('Create_Diplome');

Route::get('/admin/diplome/{id}',[AdminController::class, 'Diplome'])->name('diplome_candidat');
Route::post('/admin/etudes',[AdminController::class, 'CreateEtude'])->name('Create_Etude');
Route::get('/admin/etudes/{id}',[AdminController::class, 'Etude'])->name('etude_formation');
Route::post('/candidat',[AutController::class,'store'])->name('candidat.store');

Route::post('/admin/person/{id}',[AdminController::class, 'CreateFiche'])->name('creer_fiche');

Route::get('/admin/person/{id}',[AdminController::class, 'Person'])->name('information_candidat');
Route::get('/admin/fiche',[AdminController::class, 'Fiche'])->name('fiche_cv');
Route::delete('/admin/person/{id}', [AdminController::class, 'DeleteCandidat'])->name('delete');
