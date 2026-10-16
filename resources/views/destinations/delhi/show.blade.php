<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo', [
        'seoTitle' => 'Delhi Travel Guide | Akash Tourism',
        'seoDescription' => 'Move between Mughal monuments, bustling bazaars and leafy colonial avenues in a capital where every street carries a few centuries of stories.',
        'seoImage' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1400&q=85',
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'TouristDestination',
            'name' => 'Delhi',
            'description' => 'Move between Mughal monuments, bustling bazaars and leafy colonial avenues in a capital where every street carries a few centuries of stories.',
            'image' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1400&q=85',
            'touristType' => 'Leisure travelers',
        ],
    ])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                        <h1>Delhi <span>Where old and new share the same street.</span></h1>
                        <p class="rj-hero-text">Move between Mughal monuments, bustling bazaars and leafy colonial
                            avenues in a capital where every street carries a few centuries of stories.</p>
                        <div class="rj-actions">
                            <a class="rj-btn rj-btn--gold"
                                href="mailto:hello@akashtourism.in?subject=Delhi%20journey">Plan this journey ↗</a>
                            <a class="rj-btn rj-btn--ghost" href="#packages">See packages</a>
                        </div>
                    </div>
                    <figure class="rj-arch" style="margin:0">
                        <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1000&q=85"
                            alt="Delhi travel destination" fetchpriority="high">
                        <figcaption class="rj-arch-tag">3 to 6 days · Akash Tourism</figcaption>
                    </figure>
                </div>
            </section>

            {{-- Quick facts --}}
            <section class="rj-facts" aria-label="Trip at a glance">
                <div class="rj-wrap">
                    <div class="rj-facts-grid">
                        <div class="rj-fact"><strong>3 – 6 days</strong><span>Pick your length</span></div>
                        <div class="rj-fact"><strong>Up to 3 cities</strong><span>Delhi, Agra, Jaipur</span></div>
                        <div class="rj-fact"><strong>3 UNESCO sites</strong><span>Red Fort, Qutub Minar, Humayun's Tomb</span></div>
                        <div class="rj-fact"><strong>Oct – Mar</strong><span>Best time to go</span></div>
                    </div>
                </div>
            </section>

            {{-- Intro --}}
            <section class="rj-intro">
                <div class="rj-wrap">
                    <h2>Come for the monuments. Stay for the food.</h2>
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
                        <p>Three ways to see Delhi and beyond. Each one starts in Delhi and can be adjusted to your dates.</p>
                    </div>
                    <div class="rj-packs-grid">
                        <article class="rj-pack">
                            <p class="rj-pack-len">3N / 4D</p>
                            <ul class="rj-pack-route" aria-label="Cities">
                                <li style="--c:#c8402f">Delhi</li>
                            </ul>
                            <ul class="rj-pack-list">
                                <li>Red Fort, Jama Masjid and a Chandni Chowk food walk</li>
                                <li>Humayun's Tomb, India Gate and Lutyens' Delhi</li>
                                <li>Qutub Minar and a slow final day</li>
                            </ul>
                            <a class="rj-btn rj-btn--gold"
                                href="mailto:hello@akashtourism.in?subject=Delhi%203N-4D%20package">Get a quote ↗</a>
                        </article>

                        <article class="rj-pack">
                            <p class="rj-pack-len">4N / 5D</p>
                            <ul class="rj-pack-route" aria-label="Cities">
                                <li style="--c:#c8402f">Delhi</li>
                                <li style="--c:#7a5cc0">Agra</li>
                            </ul>
                            <ul class="rj-pack-list">
                                <li>Two days in Delhi's old and new quarters</li>
                                <li>Taj Mahal and Agra Fort</li>
                                <li>A relaxed return to Delhi</li>
                            </ul>
                            <a class="rj-btn rj-btn--gold"
                                href="mailto:hello@akashtourism.in?subject=Delhi%204N-5D%20package">Get a quote ↗</a>
                        </article>

                        <article class="rj-pack rj-pack--full"><span class="rj-pack-flag">Full circuit</span>
                            <p class="rj-pack-len">5N / 6D</p>
                            <ul class="rj-pack-route" aria-label="Cities">
                                <li style="--c:#c8402f">Delhi</li>
                                <li style="--c:#7a5cc0">Agra</li>
                                <li style="--c:#d6537a">Jaipur</li>
                            </ul>
                            <ul class="rj-pack-list">
                                <li>Everything above, plus Jaipur</li>
                                <li>Amer Fort, City Palace and Hawa Mahal</li>
                                <li>Ends back in Delhi</li>
                            </ul>
                            <a class="rj-btn rj-btn--gold"
                                href="mailto:hello@akashtourism.in?subject=Delhi%205N-6D%20package">Get a quote ↗</a>
                        </article>
                    </div>
                </div>
            </section>

            {{-- Route --}}
            <section class="rj-route" id="route">
                <div class="rj-wrap">
                    <div class="rj-route-head">
                        <h2>Your days on the ground</h2>
                        <p>The 5N / 6D route in detail, from the capital through Agra and Jaipur and back.</p>
                    </div>

                    <ol class="rj-stops"
                        style="--rj-line-grad: linear-gradient(#c8402f, #7a5cc0, #d6537a, #c8402f)">
                        <li class="rj-stop" style="--c:#c8402f">
                            <div class="rj-card">
                                <span class="rj-days">Days 1–2</span>
                                <h3>Delhi, the Capital</h3>
                                <p>Arrive in Delhi and spend two days between Old and New Delhi: Red Fort, Jama
                                    Masjid and the lanes of Chandni Chowk, then Humayun's Tomb, India Gate and Qutub
                                    Minar.</p>
                            </div>
                        </li>
                        <li class="rj-stop" style="--c:#7a5cc0">
                            <div class="rj-card">
                                <span class="rj-days">Day 3</span>
                                <h3>Agra, the Taj City</h3>
                                <p>Travel to Agra to see the Taj Mahal and the red sandstone walls of Agra Fort, with
                                    time to watch the light change on the marble.</p>
                            </div>
                        </li>
                        <li class="rj-stop" style="--c:#d6537a">
                            <div class="rj-card">
                                <span class="rj-days">Days 4–5</span>
                                <h3>Jaipur, the Pink City</h3>
                                <p>Continue to Jaipur for Amer Fort, City Palace and Hawa Mahal, plus an evening in
                                    the old-city bazaars known for block-print textiles and gemstones.</p>
                            </div>
                        </li>
                        <li class="rj-stop" style="--c:#c8402f">
                            <div class="rj-card">
                                <span class="rj-days">Day 6</span>
                                <h3>Back to Delhi</h3>
                                <p>Return to Delhi with time for a last round of shopping and street food before
                                    your onward journey.</p>
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
                            <h2>Ready to see Delhi?</h2>
                            <p>Tell us your dates and group size, and we'll shape the route around you.</p>
                        </div>
                        <a class="rj-btn rj-btn--gold"
                            href="mailto:hello@akashtourism.in?subject=Delhi%20journey">Plan this journey ↗</a>
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