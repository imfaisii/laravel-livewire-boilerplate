<?php

use App\Http\Livewire\Permissions\Roles\Create as RolesCreate;
use App\Http\Livewire\Permissions\Roles\Edit as RolesEdit;
use App\Http\Livewire\Permissions\Roles\Index as RolesIndex;
use App\Http\Livewire\Permissions\Users\Create as UsersCreate;
use App\Http\Livewire\Permissions\Users\Edit as UsersEdit;
use App\Http\Livewire\Permissions\Users\Index as UsersIndex;
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


Route::group(['middleware' => ['auth', 'verified']], function () {

    /* Roles Routes */
    Route::get('/roles', RolesIndex::class)->name('roles.index');
    Route::get('/roles/create', RolesCreate::class)->name('roles.create');
    Route::get('/roles/{role}/edit', RolesEdit::class)->name('roles.edit');

    /* Users Routes */
    Route::get('/users', UsersIndex::class)->name('users.index');
    Route::get('/users/create', UsersCreate::class)->name('users.create');
    Route::get('/users/{user}/edit', UsersEdit::class)->name('users.edit');
});
