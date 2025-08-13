<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('posts', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate(['content' => 'required|string|max:1000']);

        Post::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        if($post->user_id === Auth::id()){
            $post->delete();
        }
        return redirect()->route('posts.index');
    }
}
