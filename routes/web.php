<?php

use Illuminate\Support\Facades\Route;


Route::get('/', ['as' => 'index', 'uses' => 'App\Livewire\Auth\Login']);
Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'App\Http\Controllers\AuthLoginController@logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'App\Livewire\UserDashboard')->name('dashboard');
});
