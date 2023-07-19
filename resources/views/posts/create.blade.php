@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="bg-light text-success p-3">Create Blog Post</h2>

                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="bg-light text-danger mt-3 mb-2 px-4" style="font-weight: bold;">Blog Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title Here : " required>
                    </div>
                    <div class="form-group">
                        <label for="content" class="bg-light text-danger mt-3 mb-2 px-4" style="font-weight: bold;"> Blog Content</label>
                        <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter Content Here : " required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Create</button>
                </form>
                
            </div>
        </div>
    </div>
@endsection
