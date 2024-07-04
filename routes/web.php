<?php

use App\Http\Controllers\UserProfilesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')
    ->group(function (): void {
        Route::get('/users/{user}/profile', [UserProfilesController::class, 'show']);
    });
