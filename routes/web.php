<?php

namespace App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

// view index route
Route::get('/index', ['App\Http\Controllers\IndexController', 'index_list']);

Route::post('/animals/search', [AnimalController::class, 'search'])->name('animal.search');
Route::post('/owners/search', [OwnerController::class, 'search'])->name('owner.search');

Route::get('/animals/detail/{animalId}', ['App\Http\Controllers\AnimalController', 'show'])->whereNumber('animalId')->name('animals.detail');
Route::get('/owners/detail/{ownerId}', ['App\Http\Controllers\OwnerController', 'show'])->whereNumber('ownerId')->name('owners.detail');

Route::get('/animals/create', ['App\Http\Controllers\AnimalController', 'create'])->name('animals.create');
Route::post('/animals', ['App\Http\Controllers\AnimalController', 'store'])->name('animals.store');
Route::get('/animals/{animalId}/edit', ['App\Http\Controllers\AnimalController', 'edit'])->name('animals.edit');
Route::put('/animals/{animalId}', ['App\Http\Controllers\AnimalController', 'update'])->name('animals.update');
