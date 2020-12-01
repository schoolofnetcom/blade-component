<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () { return view('welcome'); });
Route::get('/components', function () {
    $users = User::all();
    return view('components', compact('users'));
});
