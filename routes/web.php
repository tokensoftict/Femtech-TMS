<?php

use App\Livewire\Auth\Login;
use App\Livewire\Home;
use App\Livewire\Pages\Settings\ManageDepartment;
use App\Livewire\Pages\Settings\Settings;
use App\Livewire\Pages\SystemUsers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Authenication Route
 */
Route::get('/', Login::class);




/**
 * Admin Livewire Route
 */
Route::prefix('/admin')->middleware('user_auth')->group(function () {
    Route::get("/dashboard", Home::class)->name('admin.dashboard');
    Route::get("/users", SystemUsers::class)->name('admin.users');
    Route::get('/manage_department', ManageDepartment::class)->name('admin.manage_department');
});
