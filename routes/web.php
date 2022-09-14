<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Models\Post;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;

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
Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');

Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
//you can view this page if you are a guest or this is the first time to enter the page 
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
// if you make post request aka submit
Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('can:admin');

Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('can:admin');

Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('can:admin');

Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('can:admin');

Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('can:admin');
