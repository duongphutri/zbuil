<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class,'index']);

Route::get('/index', function () {
    return view('frontend.layouts.index');
})->name('index');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

Route::get('/blog', function () {
    return view('frontend.pages.blog');
})->name('blog');

Route::get('/service', function () {
    return view('frontend.pages.service');
})->name('service');

Route::get('/team', function () {
    return view('frontend.pages.team');
})->name('team');

Route::get('/project', function () {
    return view('frontend.pages.project');
})->name('project');

Route::get('/single', function () {
    return view('frontend.pages.single');
})->name('single');

Route::group(
    [
        'as' => 'admin.',
        'prefix' =>'admin',

    ],
    function () {
        Route::get('/login', function () {
            return  view('auth.login');
        })->name('login.get');

        Route::post('/login', [LoginController::class, 'login'])->name('login.post');

        Route::get('/register', function () {
            return  view('auth.register');
        })->name('register');

        Route::post('/register',[RegisterController::class, 'register'])->name('register.post');

        Route::get('/home', function () {
            return view('home');
        });
    }
    );
