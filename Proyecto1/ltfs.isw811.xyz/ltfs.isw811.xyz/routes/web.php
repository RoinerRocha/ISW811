<?php

use App\Http\Controllers\PostCommentsController;

use App\Http\Controllers\AdminPostController;

use App\Http\Controllers\PostsController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\SessionsController;

use App\Http\Controllers\NewsletterController;

use App\Models\Post;

use App\Models\User;

use App\Services\Newsletter;

use Illuminate\Support\Facades\Route;

use Spatie\YamlFrontMatter\YamlFrontMatter;

use \Illuminate\Validation\ValidationException;

use App\Models\Category;



Route::get('/', [PostsController::class, 'index'])->name ('home'); 

Route::get('posts/{post:slug}', [PostsController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsletterController::class); 

Route::get('register', [RegisterController::class, 'create'])->middleware('guest'); 
Route::post('register', [RegisterController::class, 'store'])->middleware('guest'); 

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});
