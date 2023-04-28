<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
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

Route::get('/', [FrontController::class, 'welcome'])->name('welcome');

Route::get('/nuovo-annuncio',[AnnouncementController::class, 'createAnnouncement'])->middleware(['auth', 'verified'])->name('announcements.create');
Route::get('/dettaglio/annuncio/{announcement}',[AnnouncementController::class, 'showAnnouncement'])->middleware(['auth', 'verified'])->name('announcements.show');

// rotta parametrica categorie
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('category.view');

// rotta per index annunci
Route::get('/tutti/annunci',[AnnouncementController::class, 'indexAnnouncement'])->name('announcements.index');

//Ricerca testo annuncio
Route::get('/ricerca/annunci',[AnnouncementController::class, 'searchAnnouncements'])->name('announcements.search');

//Lavora con noi
Route::get('/lavora-con-noi', [RevisorController::class, 'workWithUs'])->middleware('auth')->name('work.with.us');


//ZONA REVISORE:
//home revisore
Route::get('/revisor/home', [RevisorController::class,'index'])->name('revisor.index');
// accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class,'acceptAnnouncement'])->middleware('isRevisor')
->name('revisor.accept_announcement');
// rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class,'rejectAnnouncement'])->middleware('isRevisor')
->name('revisor.reject_announcement');

//Richiedi di diventare revisore (la rotta è protetta dal middleware perhè solo un utente loggato potrà inviare la richiesta)
Route::post('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

//Rendi l'utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// Autenticazione con google
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

// rotta provvisoria
Route::get('/arriva/presto',[FrontController::class, 'wip'])->name('wip');

//account
Route::get('/account/{user}', [AccountController::class, 'account'])->middleware(['auth', 'verified'])->name('account');


// rotta per la lingua differente
Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('setLocale');

