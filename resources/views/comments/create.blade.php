
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">

        <h2>Create Post</h2>

        <form method="POST" action="/posts">
            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="6" required></textarea>
            </div>

            <button class="btn btn-primary">Save</button>
        </form>
        
    </div>
</div>
@endsection
