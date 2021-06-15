<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\usertable;

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

// after login Dashboard route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// show data after login route
Route::get('userdata','App\Http\Controllers\usertable@index');

//Delete data route
Route::get('delete/{id}','App\Http\Controllers\usertable@delete');



