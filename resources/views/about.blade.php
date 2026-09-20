<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">@include('partials.seo', [
        'seoTitle' => 'About Us | Akash Tourism',
        'seoDescription' =>
            'Meet Akash Tourism, a thoughtful travel team creating deeper, slower, and more personal journeys across India.',
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'AboutPage',
            'name' => 'About Akash Tourism',
            'description' => 'The story and travel philosophy behind Akash Tourism.',
            'about' => ['@type' => 'TravelAgency', 'name' => 'Akash Tourism'],
        ],
    ])@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="about-page">
    <div class="site-shell">
      @include('partials.navbar')
        <main>
            <section class="about-hero">
                <div>
                    <p class="eyebrow dark"><span></span> About Akash Tourism</p>
                    <h1>Travel is better<br>when it feels<br><em>like yours.</em></h1>
                    <p>We are a small team of curious locals, thoughtful planners, and lifelong travellers helping
                        people experience India with more depth and less rush.</p>
                </div>
                <div class="about-hero-image"><img
                        src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1200&q=85"
                        alt="The Taj Mahal in warm evening light"><span>THE PLACES WE CALL HOME</span></div>
            </section>
            <section class="about-story">
                <div>
                    <p class="eyebrow dark"><span></span> Our point of view</p>
                    <h2>Go beyond<br><em>the obvious.</em></h2>
                </div>
                <div class="about-copy">
                    <p>Akash Tourism began with a simple belief: the best trips are not the ones where you see the most.
                        They are the ones where you notice more.</p>
                    <p>That might be a chai shared with a driver, a sunrise with no one else around, or a meal you would
                        never have found on your own. We build the space for those moments into every journey.</p><a
                        class="text-link" href="{{ route('services') }}">See how we travel <span>↗</span></a>
                </div>
            </section>
            <section class="about-values">
                <p class="eyebrow"><span></span> What guides us</p>
                <h2>Thoughtful by<br><em>nature.</em></h2>
                <div class="values-grid">
                    <div><strong>01</strong>
                        <h3>Local first</h3>
                        <p>We listen to the people who live in each place and let their knowledge lead the way.</p>
                    </div>
                    <div><strong>02</strong>
                        <h3>Slow is a feature</h3>
                        <p>We leave room in the itinerary for detours, long lunches, and changing your mind.</p>
                    </div>
                    <div><strong>03</strong>
                        <h3>Small details matter</h3>
                        <p>The right room, the kind driver, the table by the window. Considered details change
                            everything.</p>
                    </div>
                </div>
            </section>
            <section class="about-cta">
                <h2>Ready to see India<br><em>our way?</em></h2><a class="primary-button"
                    href="{{ route('services') }}">Plan your journey <span>↗</span></a>
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
