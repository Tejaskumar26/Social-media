<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
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
    return view('home');
});
Route::get('back', function()
{
    return view('dhome');
});
Route::get('create',[PostController::class,'create']);
Route::post('/store',[PostController::class,'store'])->name('post.store');
Route::post('/post',[PostController::class,'show'])->name('post.show');
Route::get('ppp', [PostController::class, 'index']);
Route::get('posts', [PostController::class, 'homep']);

Route::get('like',[LikeController::class,'like']);
Route::get('dis',[LikeController::class,'unlike']);

Route::get('frnd',[HomeController::class,'frndlist']);
ROute::get('suggestion',[HomeController::class,'users']);
Route::get('add',[HomeController::class,'addfriend']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
