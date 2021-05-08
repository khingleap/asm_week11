<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::get();
        return view('Posts.data',[
            'posts' => $posts
        ]);
    }

    
    public function create()
    {
        $categories = Category::get();
        return view('Posts.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Post::create($input);
        return redirect(route('Posts.index'));
    }

    public function edit(Post $post)
    {
        $categories = Category::get();
        return view('Posts.edit', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect(route('Posts.index'));
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('Posts.index'));
    }
}
