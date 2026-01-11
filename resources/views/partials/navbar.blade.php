<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
        <span
    class="fw-bold text-white"
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
        </a>

        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item">
                     <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">My Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts/create">Create Post</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">Profile</a>
                </li>
            
                <li class="nav-item">
                    <form method="POST"
                    action="{{ route('logout') }}"
                    onsubmit="return confirm('Are you sure you want to log out?');">
                     @csrf
                     <button class="btn btn-link nav-link">Logout</button>
                    </form>

                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>