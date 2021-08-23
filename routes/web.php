<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

//Laravel 8 (New)
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

//Post endpoints
Route::get('/posts', [PostsController::class, 'index']);




// Route::get('/products/about', [ProductsController::class, 'about']);

//Products - Interget
// Route::get('products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

//Products - string
// Route::get('products/{name}/{id}', [ProductsController::class, 'show'])->where([
//     'name' => '[a-zA-Z]+',
//     'id' => '[0-9]+'
// ]);
