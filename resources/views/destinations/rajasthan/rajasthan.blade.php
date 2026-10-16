<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo', [
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
    ])
    @vite(['resources/css/app.css', 'resources/css/destination-detail.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&family=Young+Serif&display=swap" rel="stylesheet">
</head>

<body class="destination-page">
    <div class="site-shell">
        @include('partials.navbar')

        <main class="rj">
            {{-- Hero --}}
            <section class="rj-hero">
                <div class="rj-wrap">
                    <div>
                        <a class="rj-back" href="{{ url('/#destinations') }}">← All destinations</a>
                        <h1>Rajasthan <span>Where every fort has a story.</span></h1>
                        <p class="rj-hero-text">Wander through painted cities and desert forts, where royal history
                            lives on in every courtyard, market, and sunset over the dunes.</p>
                        <div class="rj-actions">
                            <a class="rj-btn rj-btn--gold"
                                href="mailto:hello@akashtourism.in?subject=Rajasthan%20journey">Plan this journey ↗</a>
                            <a class="rj-btn rj-btn--ghost" href="#packages">See packages</a>
                        </div>
                    </div>
                    <figure class="rj-arch" style="margin:0">
                        <img src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1000&q=85"
                            alt="Rajasthan travel destination" fetchpriority="high">
                        <figcaption class="rj-arch-tag">6 days · 5 nights · Akash Tourism</figcaption>
                    </figure>
                </div>
            </section>

            {{-- Quick facts --}}
            <section class="rj-facts" aria-label="Trip at a glance">
                <div class="rj-wrap">
                    <div class="rj-facts-grid">
                        <div class="rj-fact"><strong>6 days</strong><span>5 nights on the road</span></div>
                        <div class="rj-fact"><strong>4 cities</strong><span>Jaipur to Udaipur</span></div>
                        <div class="rj-fact"><strong>1 desert night</strong><span>Camel safari and dunes</span></div>
                        <div class="rj-fact"><strong>Oct – Mar</strong><span>Best time to go</span></div>
                    </div>
                </div>
            </section>

            {{-- Intro --}}
            <section class="rj-intro">
                <div class="rj-wrap">
                    <h2>Come for the forts. Stay for the feeling.</h2>
                    <div>
                        <p>Every Akash Tourism route is designed around more than a landmark. We pair the essential
                            sights with local encounters, thoughtful stays, and enough open space to make the day
                            your own.</p>
                        <a class="rj-link" href="{{ route('services') }}">View travel services ↗</a>
                    </div>
                </div>
            </section>


            {{-- Packages --}}
            <section class="rj-packs" id="packages">
                <div class="rj-wrap">
                    <div class="rj-packs-head">
                        <h2>Pick your trip length</h2>
                        <p>Three ways to see Rajasthan. Each one starts in Jaipur and can be adjusted to your dates.</p>
                    </div>
                    <div class="rj-packs-grid">
                        <article class="rj-pack">
                            <p class="rj-pack-len">3N / 4D</p>
                            <ul class="rj-pack-route" aria-label="Cities"><li class="c-jaipur">Jaipur</li><li class="c-jodhpur">Jodhpur</li></ul>
                            <ul class="rj-pack-list"><li>Amer Fort, City Palace and the old-city bazaars</li><li>Mehrangarh Fort and the blue lanes of Jodhpur</li><li>A short, easy pace for a long weekend</li></ul>
                            <a class="rj-btn rj-btn--gold" href="mailto:hello@akashtourism.in?subject=Rajasthan%203N-4D%20package">Get a quote ↗</a>
                        </article>
                        <article class="rj-pack">
                            <p class="rj-pack-len">4N / 5D</p>
                            <ul class="rj-pack-route" aria-label="Cities"><li class="c-jaipur">Jaipur</li><li class="c-jodhpur">Jodhpur</li><li class="c-udaipur">Udaipur</li></ul>
                            <ul class="rj-pack-list"><li>Two days in Jaipur, one in Jodhpur</li><li>Lake Pichola boat ride in Udaipur</li><li>City Palace at dusk</li></ul>
                            <a class="rj-btn rj-btn--gold" href="mailto:hello@akashtourism.in?subject=Rajasthan%204N-5D%20package">Get a quote ↗</a>
                        </article>
                        <article class="rj-pack rj-pack--full"><span class="rj-pack-flag">Full circuit</span>
                            <p class="rj-pack-len">5N / 6D</p>
                            <ul class="rj-pack-route" aria-label="Cities"><li class="c-jaipur">Jaipur</li><li class="c-jodhpur">Jodhpur</li><li class="c-jaisalmer">Jaisalmer</li><li class="c-udaipur">Udaipur</li></ul>
                            <ul class="rj-pack-list"><li>Everything above, plus Jaisalmer fort</li><li>Camel safari and a night in the Thar Desert</li><li>Ends in Udaipur</li></ul>
                            <a class="rj-btn rj-btn--gold" href="mailto:hello@akashtourism.in?subject=Rajasthan%205N-6D%20package">Get a quote ↗</a>
                        </article>
                    </div>
                </div>
            </section>

            {{-- Route --}}
            <section class="rj-route" id="route">
                <div class="rj-wrap">
                    <div class="rj-route-head">
                        <h2>Your days on the ground</h2>
                        <p>The 5N / 6D route in detail, from the Pink City to the City of Lakes.</p>
                    </div>

                    <ol class="rj-stops">
                        <li class="rj-stop rj-stop--jaipur">
                            <div class="rj-card">
                                <span class="rj-days">Days 1–2</span>
                                <h3>Jaipur, the Pink City</h3>
                                <p>Arrive in Jaipur and settle in before two full days exploring Amer Fort, City
                                    Palace, and the narrow bazaars of the old city, famous for block-print textiles
                                    and gemstones.</p>
                            </div>
                        </li>
                        <li class="rj-stop rj-stop--jodhpur">
                            <div class="rj-card">
                                <span class="rj-days">Day 3</span>
                                <h3>Jodhpur, the Blue City</h3>
                                <p>Travel to Jodhpur and spend the afternoon beneath the towering ramparts of
                                    Mehrangarh Fort, followed by an evening walk through the indigo-washed lanes
                                    below.</p>
                            </div>
                        </li>
                        <li class="rj-stop rj-stop--jaisalmer">
                            <div class="rj-card">
                                <span class="rj-days">Days 4–5</span>
                                <h3>Jaisalmer &amp; the Thar Desert</h3>
                                <p>Head deep into the desert to Jaisalmer's golden sandstone fort, then spend a
                                    night under the stars after a camel safari into the dunes at sunset.</p>
                            </div>
                        </li>
                        <li class="rj-stop rj-stop--udaipur">
                            <div class="rj-card">
                                <span class="rj-days">Day 6</span>
                                <h3>Udaipur, the City of Lakes</h3>
                                <p>End the journey in Udaipur with a boat ride on Lake Pichola and a final evening
                                    watching the City Palace glow at dusk.</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </section>

            {{-- CTA --}}
            <section class="rj-cta">
                <div class="rj-wrap">
                    <div class="rj-cta-box">
                        <div>
                            <h2>Ready to see Rajasthan?</h2>
                            <p>Tell us your dates and group size, and we'll shape the route around you.</p>
                        </div>
                        <a class="rj-btn rj-btn--gold"
                            href="mailto:hello@akashtourism.in?subject=Rajasthan%20journey">Plan this journey ↗</a>
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