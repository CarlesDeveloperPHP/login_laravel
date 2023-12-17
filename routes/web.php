<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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

Route::get('/', HomeController::class);  
/*
Route::get('books', [BookController::class, 'index']); 
Route::get('books/create', [BookController::class, 'create']); 
*/

Route::controller(BookController::class)->group(function(){
    Route::get('books', 'index');
    Route::get('books/create','create');
    Route::get('books/{book}', 'show');  

});

