<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('blog.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function show (Post $post)
    {
        return view('blog.show',compact('post'));
    }



}
