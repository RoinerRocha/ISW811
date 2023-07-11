<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;

use App\Services\MailchimpNewsletter;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function __invoke(Newsletter $newsletter)
    {

        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
            
        } catch (Exception $e) {
            throw ValidationException::withMessages ([
                'email' => 'Este email no se puede utilizar'
            ]);
        }


        return redirect('/')
            ->with('success', 'Ahora eres miembro de nuestro boletín');
    }
}
