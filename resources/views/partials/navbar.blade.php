<header class="site-header">
            <a class="brand" href="{{ url('/') }}" aria-label="Akash Tourism home">
                <img src="{{ asset('images/icon.png') }}" alt="Akash Tourism" class="brand-mark">
                <span>Akash Tourism</span>
            </a>
            <nav class="desktop-nav" aria-label="Primary navigation"><a href="{{ route('services') }}">Services</a><a
                    href="{{ route('airport-pickup-drop-service') }}">Airport pickup &amp; drop</a><a
                    href="{{ route('blog.index') }}">Blog</a><a href="{{ route('about') }}">About us</a><a
                    href="{{ route('privacy') }}">Privacy</a></nav>
            <div class="header-actions">
                <button class="icon-button" type="button" aria-label="Search" data-search-trigger><svg
                        viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="m16 16 5 5"></path>
                    </svg></button>
                <button class="theme-toggle" type="button" data-theme-toggle aria-label="Switch to dark theme"
                    title="Switch to dark theme">
                    <svg class="theme-toggle-moon" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M20.5 15.5A8.5 8.5 0 0 1 8.5 3.5 8.5 8.5 0 1 0 20.5 15.5Z"></path>
                    </svg>
                    <svg class="theme-toggle-sun" viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"></path>
                    </svg>
                    <span data-theme-label>Dark</span>
                </button>
                <a class="saved-link" href="#saved">Saved <span>0</span></a>
                <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav"
                    aria-label="Toggle menu"><span></span><span></span></button>
            </div>
        </header>
        <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation"><a href="#destinations">Explore</a><a
                href="{{ route('services') }}">Services</a><a href="{{ route('airport-pickup-drop-service') }}">Airport pickup &amp; drop</a><a
                href="{{ route('blog.index') }}">Blog</a><a
                href="{{ route('about') }}">About us</a><a href="{{ route('privacy') }}">Privacy</a></nav>