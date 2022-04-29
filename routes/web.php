<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
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

//Route that returns a view
Route::get('/', [PagesController::class, 'index'])->name('pages');

Route::put('hello', [UserController::class, 'TestRequest']);
Route::view('login', 'front.pages.form');



Route::get('/login', [PagesController::class, 'about']);

//Posts endpoint
Route::get('/posts', [
    PostsController::class, 'index',
]);

// Route::get('/mail', [
//     PostsController::class, 'mail',
// ]);

Route::get('/mail', [
    MailController::class, 'mail']);




