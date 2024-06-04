<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Artisan;


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
    // $utilisateur = User::first();
    // auth()->login($utilisateur);
    // dd(auth()->user());
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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

//To change the language
Route::get('/locale', function (Request $request) {
    $query = $request->query();
    if (isset($query['lang'])) {
        $lang = $query['lang'];
    } else {
        $lang =  "en";
    }
    session()->put('locale', $lang);
    return back();
})->name('locale');

//AUTH routes
Route::get('/login', [AuthController::class, "login"])->name("login");
Route::post('/login', [AuthController::class, "authenticate"])->name("authenticate");
Route::get('/logout', [AuthController::class, "logout"])->name("logout");

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
