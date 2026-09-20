<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">@include('partials.seo', [
        'seoTitle' => $destination['name'] . ' Travel Guide | Akash Tourism',
        'seoDescription' => $destination['description'],
        'seoImage' => $destination['image'],
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'TouristDestination',
            'name' => $destination['name'],
            'description' => $destination['description'],
            'image' => $destination['image'],
            'touristType' => 'Leisure travelers',
        ],
    ])@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="destination-page">
    <div class="site-shell">
              @include('partials.navbar')
        <main>
            <section class="destination-detail-hero">
                <div class="destination-detail-copy"><a class="back-to-blog" href="{{ url('/#destinations') }}">← All
                        destinations</a>
                    <p class="eyebrow"><span></span> {{ $destination['eyebrow'] }}</p>
                    <h1>{{ $destination['name'] }}<br><em>{{ $destination['title'] }}</em></h1>
                    <p>{{ $destination['description'] }}</p><a class="primary-button"
                        href="mailto:info@akashjourney.com?subject={{ urlencode($destination['name'] . ' journey') }}">Plan
                        this journey <span>↗</span></a>
                </div>
                <div class="destination-detail-image"><img src="{{ $destination['image'] }}"
                        alt="{{ $destination['name'] }} travel destination"><span>{{ $destination['duration'] }} /
                        AKASH TOURISM</span></div>
            </section>
            <section class="destination-detail-info">
                <p class="eyebrow dark"><span></span> A considered escape</p>
                <h2>Come for the view.<br><em>Stay for the feeling.</em></h2>
                <div>
                    <p>Every Akash Tourism route is designed around more than a landmark. We pair the essential sights
                        with local encounters, thoughtful stays, and enough open space to make the day your own.</p><a
                        class="text-link" href="{{ route('services') }}">View travel services <span>↗</span></a>
                </div>
            </section>
            @if(isset($destination['highlights']))
<section class="destination-highlights">
    <p class="eyebrow dark"><span></span> Trip highlights</p>
    <h2>What makes it<br><em>unforgettable.</em></h2>
    <ul>
        @foreach($destination['highlights'] as $highlight)
            <li>{{ $highlight }}</li>
        @endforeach
    </ul>
</section>
@endif

@if(isset($destination['itinerary']))
<section class="destination-itinerary">
    <p class="eyebrow dark"><span></span> Suggested route</p>
    <h2>Your days<br><em>on the ground.</em></h2>
    <div class="itinerary-list">
        @foreach($destination['itinerary'] as $stop)
            <div class="itinerary-item">
                <span class="itinerary-day">{{ $stop['day'] }}</span>
                <div>
                    <h3>{{ $stop['title'] }}</h3>
                    <p>{{ $stop['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endif
        </main>
        <footer class="site-footer">
            <div class="footer-brand">
                <div class="brand"><span class="brand-mark">A</span><span>Akash Tourism</span></div>
                <p>Made for the curious.</p>
            </div>
            <div class="footer-links">
                <div><strong>Site</strong><a href="{{ route('about') }}">About us</a><a
                        href="{{ route('services') }}">Services</a><a href="{{ route('blog.index') }}">Blog</a><a
                        href="{{ route('privacy') }}">Privacy policy</a></div>
                <div><strong>Destinations</strong><a href="{{ route('destinations.show', 'delhi') }}">Delhi</a><a
                        href="{{ route('destinations.show', 'agra') }}">Agra</a><a
                        href="{{ route('destinations.show', 'jammu-kashmir') }}">Jammu & Kashmir</a><a
                        href="{{ route('destinations.show', 'himachal-pradesh') }}">Himachal Pradesh</a><a
                        href="{{ route('destinations.show', 'rajasthan') }}">Rajasthan</a>
                    </div>
            </div><span>© 2024 Akash Tourism India</span>
        </footer>
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
