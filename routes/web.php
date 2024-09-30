<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gang/menu', function () {
    $categories = Category::query()
        ->with('products', fn ($query) => $query->where('active', 1))
        ->where('active', 1)
        ->get();

    return view('menu', ['categories' => $categories]);
});
