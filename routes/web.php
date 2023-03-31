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

Route::get('/nuovo-annuncio',[AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('annoucements.create');
// rotta parametrica categorie
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('category.view');

Route::get('/nuovo-annuncio',[AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');
