
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">

        <h2 class="mb-3">My Blog Posts</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h4>{{ $post->title }}</h4>
                    <p>{{ Str::limit($post->content, 150) }}</p>

                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-sm btn-primary">Edit</a>

                    <form action="/posts/{{ $post->id }}"
      method="POST"
      class="d-inline"
      onsubmit="return confirm('Are you sure you want to delete this post?');">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger">Delete</button>
</form>

                </div>
            </div>
        @endforeach

        @if($posts->isEmpty())
            <p>No posts yet.</p>
        @endif

    </div>
</div>

@endsection
