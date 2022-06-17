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

Route::get('/animals/{animalId}/detail', ['App\Http\Controllers\AnimalController', 'show'])->whereNumber('animalId')->name('animals.detail');
Route::get('/animals/search/{animal_name}', [AnimalController::class, 'search']);
