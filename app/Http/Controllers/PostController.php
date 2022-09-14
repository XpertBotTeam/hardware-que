<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dd(Gate::allows('admin'));
        // lama bdk tst3ml where lazm tst3ml quary scops 27san
        // return view('posts.index')->with('posts', Post::all());
        return view('posts.index', [
            'posts' => Post::get()
                // 3shan tdal ll cat ma3 ll page number
                // 3ashan lama tkon bi cat m3ayani wwt8ayer ll page ma tro7 ll cat 
        ]);

    }
}
