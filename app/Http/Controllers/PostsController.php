<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\Testmarkdown;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostsController extends Controller
{
    public function index(){
    //     // //non fluent query
    //     // //DB::select(['table' => 'posts', 'where' => ['id' => 1]]);

    //     // //Fluent query
    //     // //DB::table('posts')->where('id' ,1)->get();
    //     // // $posts = DB::select('select * from posts where id= :id', ['id' => 7]);

    //     // $id=7;
    //     // // $posts = DB::table('posts')->where('id', $id)->get();
    //     // // $posts = DB::table('posts')
    //     // // ->select('body')
    //     // // ->get();
    //     // // $posts = DB::table('posts')
    //     // // ->where('created_at', '>', now()->subDay())
    //     // // ->orWhere('title', 'Miss' )
    //     // // ->get();
    //     // // dd($posts);



        return view ('front.posts.index');
    }

    public function mail()
    {
        // $users = [
        //     'admin@gmail.com',
        //     'elias@gmail.com',
        //     'gursel@gmail.com',
        // ];

        $user = [
            'email' => 'user@test.com',
            'name'  => 'Mr. Truc'
        ];

        // $user = 'plop';
        //dd($user['email']);

        // foreach ($users as $user) {
        //     Mail::to( $user )->send(new testMail());
        // }

        // Mail::to( $user['email'] )->send(new TestMail($user));

        Mail::to( $user['email'] )->send(new Testmarkdown());
        return view ("home");

    }
}


