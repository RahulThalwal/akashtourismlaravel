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
     @include('partials.navbar')
        <main>
            <article class="article">
                <a class="back-to-blog" href="{{ route('blog.index') }}">← Back to all stories</a>
                <header class="article-header"><p class="eyebrow dark"><span></span> {{ $blog['category'] }} · {{ $blog['location'] }}</p><h1>{{ $blog['title'] }}</h1><p class="article-intro">{{ $blog['intro'] }}</p><div class="article-meta"><span>{{ $blog['date'] }}</span><span>{{ $blog['read_time'] }}</span></div></header>
                <figure class="article-image"><img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}"><figcaption>Akash Tourism field notes</figcaption></figure>
                <div class="article-body"><div class="article-share"><span>Share</span><a href="mailto:?subject={{ urlencode($blog['title']) }}">Email</a></div><div>
                    @if (!empty($blog['sections']))
                        @foreach ($blog['sections'] as $section)
                            <section class="article-section">
                                <h2>{{ $section['heading'] }}</h2>
                                @foreach ($section['paragraphs'] as $paragraph)
                                    @include('blog.block', ['block' => $paragraph])
                                @endforeach
                            </section>
                        @endforeach
                    @else
                        @foreach ($blog['body'] as $item)
                            @include('blog.block', ['block' => $item])
                        @endforeach
                    @endif
                </div></div>
            </article>
        </main>
        @include('partials.footer')
    </div>
</body>
</html>