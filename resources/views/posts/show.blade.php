@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="bg-light text-dark p-5">
                    <h2 class="text-success">{{ $post->title }}</h2>
                    <p class=" text-danger">Published on {{ $post->created_at->format('M d, Y') }}</p>
                    <p>{{ $post->content }}</p>
                </div>
                <hr class="text-warning bg-danger" style="height: 2px;">

                <h3 class="bg-light text-success p-2">Comments</h3>

                @foreach ($post->comments as $comment)
                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-success">Name : {{ $comment->user->name }}</h6>
                            <p class="card-text">{{ $comment->content }}</p>
                            <p class="text-danger">{{ $comment->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                @endforeach

                @auth
                <hr class="text-warning bg-danger" style="height: 2px;">

                    <h3 class="bg-light text-success p-2">Add a Comment</h3>

                    <form action="{{ route('comments.store', $post) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="content" rows="3" placeholder="Enter your comment" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                @else
                    <p class="bg-light text-dark p-2">Please <a href="{{ route('login') }}">login</a> to leave a comment.</p>
                @endauth
            </div>
        </div>
    </div>
@endsection
