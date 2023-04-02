<?php

use App\Http\Controllers\AnnouncementController;
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

Route::get('/nuovo-annuncio',[AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');
Route::get('/dettaglio/annuncio/{announcement}',[AnnouncementController::class, 'showAnnouncement'])->middleware('auth')->name('announcements.show');

// rotta parametrica categorie
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('category.view');

//ZONA REVISORE:
//home revisore
Route::get('/revisor/home', [RevisorController::class,'index'])->name('revisor.index');
// accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class,'acceptAnnouncement'])->middleware('isRevisor')
->name('revisor.accept_announcement');
// rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class,'rejectAnnouncement'])->middleware('isRevisor')
->name('revisor.reject_announcement');