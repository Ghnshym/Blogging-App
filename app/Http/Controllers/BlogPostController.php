<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;


class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(BlogPost $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }


    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    $post = auth()->user()->posts()->create($validatedData);

    return redirect()->route('posts.show', $post);
}


    public function edit(BlogPost $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, BlogPost $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($validatedData);

        return redirect()->route('posts.show', $post);
    }

    public function destroy(BlogPost $post)
    {
        $post->delete();

        return redirect()->route('home');
    }

    public function list()
    {
        $posts = BlogPost::latest()->paginate(6);
        return view('posts.index', compact('posts'));
    }

}
