<?php

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/menus', function () {
    return response()->json(Menu::all());
});

Route::get('/menus/{id}', function ($id) {
    return response()->json(Menu::findOrFail($id));
});
