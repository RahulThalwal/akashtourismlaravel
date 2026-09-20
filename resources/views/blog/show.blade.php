<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo', ['seoTitle' => $blog['title'] . ' | Akash Tourism', 'seoDescription' => $blog['intro'], 'seoKeywords' => $blog['keywords'] ?? null, 'seoImage' => $blog['image'], 'seoType' => 'article', 'seoSchema' => ['@context' => 'https://schema.org', '@type' => 'Article', 'headline' => $blog['title'], 'description' => $blog['intro'], 'image' => [$blog['image']], 'datePublished' => '2024-09-15', 'dateModified' => '2024-09-15', 'author' => ['@type' => 'Organization', 'name' => 'Akash Tourism', 'url' => 'https://akashjourney.com'], 'publisher' => ['@type' => 'Organization', 'name' => 'Akash Tourism', 'url' => 'https://akashjourney.com']]])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="blog-page article-page">
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="{{ url('/') }}" aria-label="Akash Tourism home"><span class="brand-mark">A</span><span>Akash Tourism</span></a>
            <nav class="desktop-nav" aria-label="Primary navigation"><a href="{{ url('/#destinations') }}">Explore</a><a href="{{ route('services') }}">Services</a><a class="active" href="{{ route('blog.index') }}">Blog</a><a href="{{ route('about') }}">About us</a><a href="{{ route('privacy') }}">Privacy</a></nav>
            <div class="header-actions"><button class="icon-button" type="button" aria-label="Search" data-search-trigger><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="6.5"></circle><path d="m16 16 5 5"></path></svg></button><a class="saved-link" href="{{ url('/#saved') }}">Saved <span>0</span></a><button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav" aria-label="Toggle menu"><span></span><span></span></button></div>
        </header>
        <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation"><a href="{{ url('/#destinations') }}">Explore</a><a href="{{ route('services') }}">Services</a><a class="active" href="{{ route('blog.index') }}">Blog</a><a href="{{ route('about') }}">About us</a><a href="{{ route('privacy') }}">Privacy</a></nav>
        <main>
            <article class="article">
                <a class="back-to-blog" href="{{ route('blog.index') }}">← Back to all stories</a>
                <header class="article-header"><p class="eyebrow dark"><span></span> {{ $blog['category'] }} · {{ $blog['location'] }}</p><h1>{{ $blog['title'] }}</h1><p class="article-intro">{{ $blog['intro'] }}</p><div class="article-meta"><span>{{ $blog['date'] }}</span><span>{{ $blog['read_time'] }}</span></div></header>
                <figure class="article-image"><img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}"><figcaption>Akash Tourism field notes</figcaption></figure>
                <div class="article-body"><div class="article-share"><span>Share</span><a href="mailto:?subject={{ urlencode($blog['title']) }}">Email</a></div><div>
                    @if (!empty($blog['sections']))
                        @foreach ($blog['sections'] as $section)
                            <section class="article-section"><h2>{{ $section['heading'] }}</h2>@foreach ($section['paragraphs'] as $paragraph)<p>{{ $paragraph }}</p>@endforeach</section>
                        @endforeach
                    @else
                        @foreach ($blog['body'] as $paragraph)<p>{{ $paragraph }}</p>@endforeach
                    @endif
                </div></div>
            </article>
        </main>
        <footer class="site-footer" id="about"><div class="footer-brand"><div class="brand"><span class="brand-mark">A</span><span>Akash Tourism</span></div><p>Made for the curious.</p></div><div class="footer-links"><div><strong>Site</strong><a href="{{ route('about') }}">About us</a><a href="{{ route('services') }}">Services</a><a href="{{ route('blog.index') }}">Blog</a><a href="{{ route('privacy') }}">Privacy policy</a></div><div><strong>Destinations</strong><a href="{{ route('destinations.show', 'delhi') }}">Delhi</a><a href="{{ route('destinations.show', 'agra') }}">Agra</a><a href="{{ route('destinations.show', 'jammu-kashmir') }}">Jammu & Kashmir</a><a href="{{ route('destinations.show', 'himachal-pradesh') }}">Himachal Pradesh</a></div></div><span>© 2024 Akash Tourism India</span></footer>
    </div>
</body>
</html>
