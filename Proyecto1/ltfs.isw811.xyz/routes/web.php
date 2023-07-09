<?php

use App\Http\Controllers\PostCommentsController;

use App\Http\Controllers\PostsController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\SessionsController;

use App\Models\Post;

use App\Models\User;

use Illuminate\Support\Facades\Route;

use Spatie\YamlFrontMatter\YamlFrontMatter;

use App\Models\Category;

Route::post('newsletter', function () {
    request()->validate(['email' => 'required|email']);

    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21'
    ]);

    try {

        $response = $mailchimp->lists->addListMember('413be1b89d', [
            'email_address' => request('email'),
            'status' => 'subscribed'
        ]);
    } catch (\Exception $e) {
        throw \Illuminate\Validation\ValidationException::withMessages ([
            'email' => 'Este email no se puede utilizar'
        ]);
    }


    return redirect('/')
        ->with('success', 'Ahora eres miembro de nuestro boletín');
}); 


Route::get('/', [PostsController::class, 'index'])->name ('home'); 

Route::get('posts/{post:slug}', [PostsController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest'); 
Route::post('register', [RegisterController::class, 'store'])->middleware('guest'); 

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
