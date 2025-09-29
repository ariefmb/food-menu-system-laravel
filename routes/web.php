<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MenuController::class, 'index']);
Route::resource('menus', MenuController::class)->except(['show']);
