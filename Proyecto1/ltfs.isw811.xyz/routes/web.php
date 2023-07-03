<?php

use App\Http\Controllers\PostsController;

use App\Models\Post;

use App\Models\User;

use Illuminate\Support\Facades\Route;

use Spatie\YamlFrontMatter\YamlFrontMatter;

use App\Models\Category;


Route::get('/', [PostsController::class, 'index'])->name ('home'); 

Route::get('posts/{post:slug}', [PostsController::class, 'show']); 

// Route::get('authors/{author:username}', function (User $author){
//     return view('posts.index', [
//         'posts' => $author -> posts
//     ]);
// });
