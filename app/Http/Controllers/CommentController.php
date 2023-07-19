<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, BlogPost $post)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $validatedData['user_id'] = auth()->id();

        $post->comments()->create($validatedData);

        return redirect()->route('posts.show', $post);
    }
}
