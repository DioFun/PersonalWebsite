<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\AdminAuthentication;

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

/* Public Routing */

Route::get('/home', [PublicController::class, "home"])->name('publicHome');
Route::redirect('/', '/home');

Route::get('/about', function () {
    return view('pages.about');
})->name('publicAbout');

Route::prefix('contact')->group(function () {
    Route::get('/', [PublicController::class, "contact"])->name('publicContact');
    Route::post('/', [PublicController::class, "contactSend"])->name('contactSend');
    Route::get('/confirm/{email}/{token}', [PublicController::class, "contactConfirm"])->name('contactConfirm');
});

/* Login Routing */

Route::get('/login', [LoginController::class, "login"])->name('login');
Route::post('/login', [LoginController::class, "loginProcess"])->name('loginProcess');
Route::get('/logout', [LoginController::class, "logout"])->name('logout');

/* Admin Routing */

Route::middleware('adminAuthentication')->prefix('dashboard')->group(function () {
    Route::get('/home', [AdminController::class, "home"])->name('adminHome');
    Route::redirect('/', '/dashboard/home');
    Route::get('/messages', [AdminController::class, "messages"])->name('adminMessages');
    Route::get('/messages/delete/{id}', [AdminController::class, "messagesDelete"])->where('id', '[0-9]+')->name('adminMessagesDelete');
    Route::get('/messages/view/{id}', [AdminController::class, "message"])->where('id', '[0-9]+')->name('adminMessageView');
    Route::get('/about', [AdminController::class, "about"])->name('adminAbout');
    Route::get('/about/new', [AdminController::class, "aboutNew"])->name('adminAboutNew');
    Route::post('/about/new', [AdminController::class, "aboutNewSend"])->name('adminAboutNewSend');
});