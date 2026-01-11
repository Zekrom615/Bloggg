<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bloggg</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Blog Header --}}
    <header class="py-5 bg-white border-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span
    class="fw-bold text-dark"
    style="
        font-size: 28px;
        letter-spacing: 1.5px;
        display: inline-block;
        animation: blogggFade 0.8s ease-out;
        transition: transform 0.2s ease;
    "
    onmouseover="this.style.transform='scale(1.05)'"
    onmouseout="this.style.transform='scale(1)'"
>
    BLOGGG
</span>
                    <p class="text-muted mb-0">
                        Where ideas find their voice.
                    </p>
                </div>
            </div>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="container mt-5">
        <div class="row">
            
            {{-- Main Blog Content --}}
            <div class="col-lg-8">
                @yield('content')
            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header bg-dark text-white fw-bold">About Bloggg</div>
                    <div class="card-body text-muted">
                        Bloggg is a simple blogging platform built with Laravel
                        where users can share posts and ideas.
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header bg-dark text-white fw-bold">Quick Links</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="/" class="text-decoration-none">Home</a>
                        </li>
                        @auth
                        <li class="list-group-item">
                            <a href="{{ route('profile.edit') }}" class="text-decoration-none">Profile</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/posts/create" class="text-decoration-none">Write a Post</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>

        </div>
    </main>

    {{-- Footer --}}
    <footer class="py-4 bg-dark mt-auto">
        <div class="container text-center">
            <p class="mb-0 text-white-50">
                &copy; {{ date('Y') }} <strong>Bloggg</strong>. All rights reserved.
            </p>
        </div>
    </footer>

    {{-- Scripts --}}
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
