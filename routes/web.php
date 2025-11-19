<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home']);
Route::get('/profil', [SiteController::class, 'showProfil']);
Route::get('/pengalaman', [SiteController::class, 'showPengalaman']);
Route::get('/kontak', [SiteController::class, 'showKontak']);
