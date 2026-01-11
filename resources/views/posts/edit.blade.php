@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">

        <h2>Edit Post</h2>

        <form method="POST" action="/posts/{{ $post->id }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="6" required>{{ $post->content }}</textarea>
            </div>
            <br>
            <button class="btn btn-success">Update</button>
        </form>
        <br>

    </div>
</div>
@endsection
