@extends('layouts.app')

@section('title', 'Post List')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create a New Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" class="border p-4 bg-light">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
