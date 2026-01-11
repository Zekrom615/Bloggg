@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">

        <h3>My Profile</h3>

        <div class="card">
            <div class="card-body">
                <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            </div>
        </div>

    </div>
</div>
@endsection
