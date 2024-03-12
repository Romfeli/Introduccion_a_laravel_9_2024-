<?php

namespace App\Http\Controllers;

// de mi proyecto
use App\Models\Post;

//laravel
use Illuminate\Http\Request;

class PageController extends Controller
{



public function home(Request $request)

    {
        $search= $request->search;

        $posts = Post::where('title', 'LIKE',"%{$search}%")->with('user')->latest()->paginate();

        return view('home', ['posts' => $posts]);
    }

/*
public function blog()

    {
    //post = Post::get();
    //$post = Post::first();
    //$post = Post::find(4);
    //dd($post);


    $posts = Post::latest()->paginate();


    //dd($posts);

    //hacer un for each en la vista blog con la variable que se le pasa @foreach($posts as $post)
        return view('blog', ['posts' => $posts] );
    }
*/


public function post(Post $post)

    {
         return view('post', ['post' => $post] );
    }
}
