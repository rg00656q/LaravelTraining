<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiscussionController;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/settings', [UserController::class, 'show'])->middleware('auth')->name('settings');
Route::post('/settings', [UserController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']
)->middleware(['auth'])->name('logout');

Route::get('/links', 'App\Http\Controllers\LinksController@index');
Route::get('/testing room', 'App\Http\Controllers\LinksController@test')->name('test');
Route::get('/mail test', 'App\Http\Controllers\LinksController@sendMail');
Route::get('/blackjack', 'App\Http\Controllers\LinksController@blackjack');

Route::get('/discussions', [DiscussionController::class, 'index']);
Route::get('/discussions/create', [DiscussionController::class, 'create']);
Route::post('/discussions', [DiscussionController::class, 'store']);
Route::get('/discussions/{discussion}', [DiscussionController::class, 'show']);
Route::get('/discussions/{discussion}/add', [DiscussionController::class, 'adduser']);
Route::post('/discussions/{discussion}/add', [DiscussionController::class, 'store_user']);
Route::post('/discussions/{discussion}', 'App\Http\Controllers\MessageController@store')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
