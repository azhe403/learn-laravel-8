<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Blogs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if($title=='Home') active @endif" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title=='Blog') active @endif" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title=='Categories') active @endif" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title=='About') active @endif" href="/about-me">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title=='About') active @endif" href="/about-laravel">Laravel</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
