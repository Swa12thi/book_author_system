<?php

use Illuminate\Support\Facades\Route;

Route::get('/authors', function () {
    return response()->json(['message' => 'Authors API working']);
});

Route::get('/books', function () {
    return response()->json(['message' => 'Books API working']);
});
