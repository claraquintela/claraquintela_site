<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;

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

Route::get('/', function (Request $request) {
    // dd($request->all());
    return view('index');
})->name("index");


Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/developer', function () {
    return view('/developer/index');
})->name("developer");

Route::get('/artist', function () {
    return view('artist/index');
})->name("artist");

Route::get('/blog', function () {
    return view('blog/index');
})->name("blog");



Route::resource('/courses', CourseController::class);
Route::resource('/users', UserController::class);

// Regroupe les routes qui commencent par le même nom 

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view('admin.index');
    });

    Route::get('/produits', function () {
        return view('admin.index');
    });
});
