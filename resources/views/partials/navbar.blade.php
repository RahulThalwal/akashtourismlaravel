<header class="site-header">
            <a class="brand" href="{{ url('/') }} aria-label="Akash Tourism home">
                <img src="{{ asset('images/icon.png') }}" alt="Akash Tourism" class="brand-mark">
                <span>Akash Tourism</span>
            </a>
            <nav class="desktop-nav" aria-label="Primary navigation"><a class="active"
                    href="#destinations">Explore</a><a href="{{ route('services') }}">Services</a><a
                    href="{{ route('blog.index') }}">Blog</a><a href="{{ route('about') }}">About us</a><a
                    href="{{ route('privacy') }}">Privacy</a></nav>
            <div class="header-actions">
                <button class="icon-button" type="button" aria-label="Search" data-search-trigger><svg
                        viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="m16 16 5 5"></path>
                    </svg></button>
                <a class="saved-link" href="#saved">Saved <span>0</span></a>
                <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav"
                    aria-label="Toggle menu"><span></span><span></span></button>
            </div>
        </header>
        <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation"><a href="#destinations">Explore</a><a
                href="{{ route('services') }}">Services</a><a href="{{ route('blog.index') }}">Blog</a><a
                href="{{ route('about') }}">About us</a><a href="{{ route('privacy') }}">Privacy</a></nav>