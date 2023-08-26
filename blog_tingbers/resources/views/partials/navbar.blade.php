<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Blog Tingbers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/blog">Blog</a>
                {{-- untuk mencegah terjadinya eror pada saat menekan nav yang lainnya langsung dari detail post --}}
                <a class="nav-link {{ ($title === "Single_Post") ? 'active' : '' }}"></a>
                {{-- end --}}
            </div>
        </div>
    </div>
</nav>
