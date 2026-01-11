@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-lg-9 mx-auto">

        @if($posts->isEmpty())
    <div class="card text-center p-5">
        <h4 class="mb-3">No posts yet 📝</h4>

        <p class="text-muted">
            Be the first one to share something on Bloggg.
        </p>

        @auth
            <a href="{{ url('/posts/create') }}"
               class="btn btn-primary mt-2">
                Write a Post
            </a>
        @else
            <a href="{{ route('login') }}"
               class="btn btn-outline-primary mt-2">
                Login to write a post
            </a>
        @endauth
    </div>
    @else

        @foreach($posts as $post)
            <div class="card mb-4">

                {{-- POST BODY --}}
                <div class="card-body">
                    <h3>{{ $post->title }}</h3>

                    <div class="mb-2">
                        {!! nl2br(e($post->content)) !!}
                    </div>

                    <small class="text-muted">
                        By {{ $post->user->name }}
                    </small>
                </div>

                {{-- COMMENTS --}}
                <div class="card-footer">
                    <h6 class="mb-3">Comments</h6>

                    {{-- COMMENTS LIST --}}
                    @forelse($post->comments as $comment)
                        <div class="mb-3 p-2 border rounded bg-light">

                            <div class="d-flex justify-content-between align-items-center">
                                <strong>{{ $comment->user->name }}</strong>

                                @auth
                                    @if($comment->user_id === auth()->id())
                                        <div>
                                            <a href="/comments/{{ $comment->id }}/edit"
                                               class="btn btn-sm btn-link p-0 me-2">
                                                Edit
                                            </a>

                                            <form method="POST"
                                                  action="/comments/{{ $comment->id }}"
                                                  class="d-inline"
                                                  onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-link text-danger p-0">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                @endauth
                            </div>

                            <div class="mt-1">
                                {{ $comment->comment }}
                            </div>

                        </div>
                    @empty
                        <p class="text-muted">No comments yet.</p>
                    @endforelse

                    {{-- ADD COMMENT --}}
                    @auth
                        <form method="POST" action="/comments" class="mt-3">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">

                            <textarea name="comment"
                                      class="form-control mb-2"
                                      rows="2"
                                      placeholder="Write a comment..."
                                      required></textarea>

                            <button class="btn btn-sm btn-primary">
                                Comment
                            </button>
                        </form>
                    @endauth
                </div>

            </div>
        @endforeach
        @endif

    </div>
</div>
@endsection
