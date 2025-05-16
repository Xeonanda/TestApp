<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/message', function () {
    return response()->json(['message' => 'This is your message']);
});
