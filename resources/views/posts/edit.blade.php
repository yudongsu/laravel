@extends('layouts.app')

@section('title', 'Post List')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Post</h1>
        
        <!-- 게시글 목록으로 돌아가는 노란 버튼 -->
        <a href="{{ route('posts.index') }}" class="btn btn-yellow mb-3">Back to List</a>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>git 
@endsection