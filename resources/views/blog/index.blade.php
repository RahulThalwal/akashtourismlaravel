<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo', ['seoTitle' => 'Travel Journal | Akash Tourism', 'seoDescription' => 'Read travel stories, local recommendations, and field notes from Delhi, Agra, Kashmir, and Himachal Pradesh.', 'seoType' => 'blog', 'seoSchema' => ['@context' => 'https://schema.org', '@type' => 'CollectionPage', 'name' => 'Akash Tourism Travel Journal', 'description' => 'Travel stories and field notes from India.']])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="blog-page">
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="#top" aria-label="Akash Tourism home">
                <img src="{{ asset('images/icon.png') }}" alt="Akash Tourism" class="brand-mark">
                <span>Akash Tourism</span>
            </a>
            <nav class="desktop-nav" aria-label="Primary navigation"><a href="{{ url('/#destinations') }}">Explore</a><a href="{{ route('services') }}">Services</a><a class="active" href="{{ route('blog.index') }}">Blog</a><a href="{{ route('about') }}">About us</a><a href="{{ route('privacy') }}">Privacy</a></nav>
            <div class="header-actions"><button class="icon-button" type="button" aria-label="Search" data-search-trigger><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="6.5"></circle><path d="m16 16 5 5"></path></svg></button><a class="saved-link" href="{{ url('/#saved') }}">Saved <span>0</span></a><button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav" aria-label="Toggle menu"><span></span><span></span></button></div>
        </header>
        <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation"><a href="{{ url('/#destinations') }}">Explore</a><a href="{{ route('services') }}">Services</a><a class="active" href="{{ route('blog.index') }}">Blog</a><a href="{{ route('about') }}">About us</a><a href="{{ route('privacy') }}">Privacy</a></nav>
        <main>
            <section class="blog-hero"><div><p class="eyebrow dark"><span></span> The Akash Tourism journal</p><h1>Notes from<br><em>the road.</em></h1><p>Small details, local voices, and the places that stay with us. Read before you go, or when you need somewhere new to dream about.</p></div><div class="blog-hero-stamp"><strong>04</strong><span>stories<br>to start with</span></div></section>
            <section class="blog-index-section"><div class="blog-section-heading"><p class="eyebrow dark"><span></span> Latest field notes</p><p>Stories from Delhi, Agra, Jammu & Kashmir, and Himachal Pradesh.</p></div><div class="blog-grid">@foreach ($blogs as $slug => $blog)<a class="blog-card" href="{{ route('blog.show', ['slug' => $slug]) }}"><div class="blog-card-image"><img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}"><span>{{ $blog['category'] }}</span></div><div class="blog-card-content"><div class="blog-meta"><span>{{ $blog['date'] }}</span><span>{{ $blog['read_time'] }}</span></div><h2>{{ $blog['title'] }}</h2><p>{{ $blog['intro'] }}</p><span class="blog-read-link">Read story <i>↗</i></span></div></a>@endforeach</div></section>
        </main>
        <footer class="site-footer" id="about"><div class="footer-brand"><div class="brand"><span class="brand-mark">A</span><span>Akash Tourism</span></div><p>Made for the curious.</p></div><div class="footer-links"><div><strong>Site</strong><a href="{{ route('about') }}">About us</a><a href="{{ route('services') }}">Services</a><a href="{{ route('blog.index') }}">Blog</a><a href="{{ route('privacy') }}">Privacy policy</a></div><div><strong>Destinations</strong><a href="{{ route('destinations.show', 'delhi') }}">Delhi</a><a href="{{ route('destinations.show', 'agra') }}">Agra</a><a href="{{ route('destinations.show', 'jammu-kashmir') }}">Jammu & Kashmir</a><a href="{{ route('destinations.show', 'himachal-pradesh') }}">Himachal Pradesh</a></div></div><span>© 2024 Akash Tourism India</span></footer>
    </div>
    <div class="search-modal" role="dialog" aria-modal="true" aria-label="Search destinations" hidden><div class="search-panel"><button class="modal-close" type="button" aria-label="Close search">×</button><p class="eyebrow dark"><span></span> Find your next story</p><h2>Where will you<br><em>wander?</em></h2><form data-search-form><label for="destination-search">Search a place</label><div class="search-input"><input id="destination-search" type="search" placeholder="Try 'mountains' or 'Agra'"><button type="submit" aria-label="Submit search">↗</button></div><p class="search-result" aria-live="polite"></p></form></div></div>
</body>
</html>
