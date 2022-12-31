<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Profile\Index as ProfileIndex;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn () => redirect()->route('dashboard'));

Route::view('/dashboard', 'pages.dashboard.index')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', ProfileIndex::class)->name('profile.edit');
});

require __DIR__ . '/auth.php';

/* ------- Permissions ------- */
require __DIR__ . '/permissions.php';
