<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // 게시글 목록 보기
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // 게시글 작성 폼
    public function create()
    {
        return view('posts.create');
    }

    // 게시글 저장
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create($validated);
        return redirect()->route('posts.index');
    }

    // 게시글 수정 폼
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // 게시글 수정 저장
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($validated);
        return redirect()->route('posts.index');
    }

    // 게시글 삭제
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}