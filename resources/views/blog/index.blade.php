<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo', [
        'seoTitle' => 'Travel Journal | Akash Tourism',
        'seoDescription' =>
            'Read travel stories, local recommendations, and field notes from Delhi, Agra, Kashmir, and Himachal Pradesh.',
        'seoType' => 'blog',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'CollectionPage',
            'name' => 'Akash Tourism Travel Journal',
            'description' => 'Travel stories and field notes from India.',
        ],
    ])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="blog-page">
    <div class="site-shell">
        @include('partials.navbar')
        <main>
            <section class="blog-hero">
                <div>
                    <p class="eyebrow dark"><span></span> The Akash Tourism journal</p>
                    <h1>Notes from<br><em>the road.</em></h1>
                    <p>Small details, local voices, and the places that stay with us. Read before you go, or when you
                        need somewhere new to dream about.</p>
                </div>
                <div class="blog-hero-stamp"><strong>04</strong><span>stories<br>to start with</span></div>
            </section>
            <section class="blog-index-section">
                <div class="blog-section-heading">
                    <p class="eyebrow dark"><span></span> Latest field notes</p>
                    <p>Stories from Delhi, Agra, Jammu & Kashmir, and Himachal Pradesh.</p>
                </div>
                <div class="blog-grid">
                    @foreach ($blogs as $slug => $blog)
                        <a class="blog-card" href="{{ route('blog.show', ['slug' => $slug]) }}">
                            <div class="blog-card-image"><img src="{{ $blog['image'] }}"
                                    alt="{{ $blog['title'] }}"><span>{{ $blog['category'] }}</span></div>
                            <div class="blog-card-content">
                                <div class="blog-meta">
                                    <span>{{ $blog['date'] }}</span><span>{{ $blog['read_time'] }}</span></div>
                                <h2>{{ $blog['title'] }}</h2>
                                <p>{{ $blog['intro'] }}</p><span class="blog-read-link">Read story <i>↗</i></span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        </main>
        @include('partials.footer')
    </div>
    <div class="search-modal" role="dialog" aria-modal="true" aria-label="Search destinations" hidden>
        <div class="search-panel"><button class="modal-close" type="button" aria-label="Close search">×</button>
            <p class="eyebrow dark"><span></span> Find your next story</p>
            <h2>Where will you<br><em>wander?</em></h2>
            <form data-search-form><label for="destination-search">Search a place</label>
                <div class="search-input"><input id="destination-search" type="search"
                        placeholder="Try 'mountains' or 'Agra'"><button type="submit"
                        aria-label="Submit search">↗</button></div>
                <p class="search-result" aria-live="polite"></p>
            </form>
        </div>
    </div>
</body>

</html>
