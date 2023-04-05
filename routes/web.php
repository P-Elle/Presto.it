<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
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

// rotta per index annunci
Route::get('/tutti/annunci',[AnnouncementController::class, 'indexAnnouncement'])->name('announcements.index');
