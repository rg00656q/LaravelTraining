<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/help', 'App\Http\Controllers\LinksController@help');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']
)->middleware(['auth'])->name('logout');

Route::get('/links', 'App\Http\Controllers\LinksController@index');
Route::get('/posts', [PostsController::class, 'index'])->name('blog');
Route::get('/posts/create', [PostsController::class, 'create']);
Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/{post}', [PostsController::class, 'show'])->whereNumber('post');
Route::post('/posts/{post}/comments', 'App\Http\Controllers\CommentsController@store')->whereNumber('post');

Route::get('/discussions', [DiscussionController::class, 'index']);
Route::get('/discussions/create', [DiscussionController::class, 'create']);
Route::post('/discussions', [DiscussionController::class, 'store']);
Route::get('/discussions/{id}', [DiscussionController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
