<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public function mail()
    {
        $user = [
            'email' => 'user@test.com',
            'name'  => 'Mr. Truc'    
        ];
        
        Mail::to( $user['email'] )->send(new TestMail($user));

        return view ("emails.test",['plop'=> $user]);
    }
}
