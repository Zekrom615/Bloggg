@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">

        <h3>Edit Comment</h3>

        <form method="POST" action="/comments/{{ $comment->id }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <textarea name="comment"
                          class="form-control"
                          rows="3"
                          required>{{ $comment->comment }}</textarea>
            </div>
            <br>

            <button class="btn btn-success">Update</button>
            <a href="/" class="btn btn-secondary">Cancel</a>

        </form>

    </div>
</div>
@endsection
