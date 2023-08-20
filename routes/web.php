<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;

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

Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/', function () {
        // dd(auth()->user());
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('change-profile', function (Request $request) {
        return view('admin.profile');
    })->name('profile');

    Route::get('change-password', function () {
        return view('admin.password');
    })->name('password');

    Route::get('students', function () {
        return view('masters.students.list');
    })->name('students');

    Route::resource('clases', KelasController::class);
});
