<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () { return view('welcome'); });
Route::get('/components', function () { return view('components'); });
Route::get('/component-method', function () {
    $users = User::all();
    return view('methods', compact('users'));
});
