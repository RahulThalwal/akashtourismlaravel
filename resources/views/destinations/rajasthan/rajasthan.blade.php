<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">@include('partials.seo', [
        'seoTitle' => 'Rajasthan Travel Guide | Akash Tourism',
        'seoDescription' => 'Wander through painted cities and desert forts, where royal history lives on in every courtyard, market, and sunset over the dunes.',
        'seoImage' => 'https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=85',
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'TouristDestination',
            'name' => 'Rajasthan',
            'description' => 'Wander through painted cities and desert forts, where royal history lives on in every courtyard, market, and sunset over the dunes.',
            'image' => 'https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=85',
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
                    <p class="eyebrow"><span></span> The land of kings</p>
                    <h1>Rajasthan<br><em>Where every fort has a story.</em></h1>
                    <p>Wander through painted cities and desert forts, where royal history lives on in every
                        courtyard, market, and sunset over the dunes.</p><a class="primary-button"
                        href="mailto:hello@akashtourism.in?subject=Rajasthan%20journey">Plan
                        this journey <span>↗</span></a>
                </div>
                <div class="destination-detail-image"><img
                        src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=85"
                        alt="Rajasthan travel destination"><span>6 Days / 5 Nights /
                        AKASH TOURISM</span></div>
            </section>
            <section class="destination-detail-info">
                <p class="eyebrow dark"><span></span> A considered escape</p>
                <h2>Come for the forts.<br><em>Stay for the feeling.</em></h2>
                <div>
                    <p>Every Akash Tourism route is designed around more than a landmark. We pair the essential
                        sights with local encounters, thoughtful stays, and enough open space to make the day your
                        own.</p><a class="text-link" href="{{ route('services') }}">View travel services <span>↗</span></a>
                </div>
            </section>
            <section class="destination-itinerary">
                <p class="eyebrow dark"><span></span> Suggested route</p>
                <h2>Your days<br><em>on the ground.</em></h2>
                <div class="itinerary-list">
                    <div class="itinerary-item">
                        <span class="itinerary-day">Day 1–2</span>
                        <div>
                            <h3>Jaipur, the Pink City</h3>
                            <p>Arrive in Jaipur and settle in before two full days exploring Amer Fort, City Palace,
                                and the narrow bazaars of the old city, famous for block-print textiles and
                                gemstones.</p>
                        </div>
                    </div>
                    <div class="itinerary-item">
                        <span class="itinerary-day">Day 3</span>
                        <div>
                            <h3>Jodhpur, the Blue City</h3>
                            <p>Travel to Jodhpur and spend the afternoon beneath the towering ramparts of Mehrangarh
                                Fort, followed by an evening walk through the indigo-washed lanes below.</p>
                        </div>
                    </div>
                    <div class="itinerary-item">
                        <span class="itinerary-day">Day 4–5</span>
                        <div>
                            <h3>Jaisalmer & the Thar Desert</h3>
                            <p>Head deep into the desert to Jaisalmer's golden sandstone fort, then spend a night
                                under the stars after a camel safari into the dunes at sunset.</p>
                        </div>
                    </div>
                    <div class="itinerary-item">
                        <span class="itinerary-day">Day 6</span>
                        <div>
                            <h3>Udaipur, the City of Lakes</h3>
                            <p>End the journey in Udaipur with a boat ride on Lake Pichola and a final evening
                                watching the City Palace glow at dusk.</p>
                        </div>
                    </div>
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