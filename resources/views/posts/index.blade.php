@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="mt-4">
                    @auth
                        <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg">Create Post</a>
                    @endauth
                </div>

                <h1 class="mt-3 mb-3 bg-success text-light p-2 text-center">Blog Posts</h1>
                @foreach ($posts as $post)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-success">Title- {{ $post->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-danger">Date- {{ $post->created_at->format('M d, Y') }}</h6>
                            <p class="card-text">{{ Str::limit($post->content, 200) }}</p>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Read More</a>
                            
                            @auth
                                @if (auth()->user()->id === $post->user_id)
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Edit</a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endforeach

                <div class="d-flex justify-content-center">
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>
    </div>
@endsection
