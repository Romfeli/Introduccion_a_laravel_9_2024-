<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

Route::controller(PageController::class)->group(
    function(){

        Route::get('/',             'home')->name('home');        
        Route::get('/blog/{post:slug}',  'post')->name('post');

    }
);

//pagina de inicio de sesion automatica de laravel breeze
Route::redirect('/dashboard','posts')->name('dashboard');


//panel de control de los posts
Route::resource('posts', PostController::class)->middleware(['auth', 'verified'])->except(['show']);

require __DIR__.'/auth.php';

