<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo', [
        'seoTitle' => 'Jammu & Kashmir Travel Guide | Akash Tourism',
        'seoDescription' => 'Drift across Dal Lake, ride above the snow line at Gulmarg and walk through green meadows where the Himalayas fill every horizon.',
        'seoImage' => 'https://images.unsplash.com/photo-1597074866923-dc0589150358?auto=format&fit=crop&w=1400&q=85',
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'TouristDestination',
            'name' => 'Jammu & Kashmir',
            'description' => 'Drift across Dal Lake, ride above the snow line at Gulmarg and walk through green meadows where the Himalayas fill every horizon.',
            'image' => 'https://images.unsplash.com/photo-1597074866923-dc0589150358?auto=format&fit=crop&w=1400&q=85',
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
                        <h1>Jammu &amp; Kashmir <span>Where the valleys keep their own time.</span></h1>
                        <p class="rj-hero-text">Drift across Dal Lake, ride above the snow line at Gulmarg and walk
                            through green meadows where the Himalayas fill every horizon.</p>
                        <div class="rj-actions">
                            <a class="rj-btn rj-btn--gold"
                                href="mailto:hello@akashtourism.in?subject=Jammu%20%26%20Kashmir%20journey">Plan this journey ↗</a>
                            <a class="rj-btn rj-btn--ghost" href="#packages">See packages</a>
                        </div>
                    </div>
                    <figure class="rj-arch" style="margin:0">
                        <img src="https://images.unsplash.com/photo-1597074866923-dc0589150358?auto=format&fit=crop&w=1000&q=85"
                            alt="Jammu and Kashmir travel destination" fetchpriority="high">
                        <figcaption class="rj-arch-tag">3 to 6 days · Akash Tourism</figcaption>
                    </figure>
                </div>
            </section>

            {{-- Quick facts --}}
            <section class="rj-facts" aria-label="Trip at a glance">
                <div class="rj-wrap">
                    <div class="rj-facts-grid">
                        <div class="rj-fact"><strong>3 – 6 days</strong><span>Pick your length</span></div>
                        <div class="rj-fact"><strong>Up to 4 stops</strong><span>Srinagar to Sonamarg</span></div>
                        <div class="rj-fact"><strong>Dal Lake</strong><span>Shikara ride and houseboat</span></div>
                        <div class="rj-fact"><strong>Apr – Oct</strong><span>Meadows; Dec – Feb for snow</span></div>
                    </div>
                </div>
            </section>

            {{-- Intro --}}
            <section class="rj-intro">
                <div class="rj-wrap">
                    <h2>Come for the lakes. Stay for the quiet.</h2>
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
                        <p>Three ways to see Kashmir. Each one starts in Srinagar and can be adjusted to your dates.</p>
                    </div>
                    <div class="rj-packs-grid">
                        <article class="rj-pack">
                            <p class="rj-pack-len">3N / 4D</p>
                            <ul class="rj-pack-route" aria-label="Cities">
                                <li style="--c:#1f8aa8">Srinagar</li>
                                <li style="--c:#6c7fd1">Gulmarg</li>
                            </ul>
                            <ul class="rj-pack-list">
                                <li>Dal Lake shikara ride and Mughal gardens</li>
                                <li>A day at Gulmarg, with the gondola ride</li>
                                <li>A short, easy pace for a long weekend</li>
                            </ul>
                            <a class="rj-btn rj-btn--gold"
                                href="mailto:hello@akashtourism.in?subject=Kashmir%203N-4D%20package">Get a quote ↗</a>
                        </article>

                        <article class="rj-pack">
                            <p class="rj-pack-len">4N / 5D</p>
                            <ul class="rj-pack-route" aria-label="Cities">
                                <li style="--c:#1f8aa8">Srinagar</li>
                                <li style="--c:#6c7fd1">Gulmarg</li>
                                <li style="--c:#3f9d5b">Pahalgam</li>
                            </ul>
                            <ul class="rj-pack-list">
                                <li>Everything above, plus Pahalgam</li>
                                <li>Lidder river walks and Betaab Valley</li>
                                <li>Unhurried time in the meadows</li>
                            </ul>
                            <a class="rj-btn rj-btn--gold"
                                href="mailto:hello@akashtourism.in?subject=Kashmir%204N-5D%20package">Get a quote ↗</a>
                        </article>

                        <article class="rj-pack rj-pack--full"><span class="rj-pack-flag">Full circuit</span>
                            <p class="rj-pack-len">5N / 6D</p>
                            <ul class="rj-pack-route" aria-label="Cities">
                                <li style="--c:#1f8aa8">Srinagar</li>
                                <li style="--c:#6c7fd1">Gulmarg</li>
                                <li style="--c:#3f9d5b">Pahalgam</li>
                                <li style="--c:#d99a2b">Sonamarg</li>
                            </ul>
                            <ul class="rj-pack-list">
                                <li>Everything above, plus Sonamarg</li>
                                <li>A day among glaciers and alpine meadows</li>
                                <li>Ends with a final evening in Srinagar</li>
                            </ul>
                            <a class="rj-btn rj-btn--gold"
                                href="mailto:hello@akashtourism.in?subject=Kashmir%205N-6D%20package">Get a quote ↗</a>
                        </article>
                    </div>
                </div>
            </section>

            {{-- Route --}}
            <section class="rj-route" id="route">
                <div class="rj-wrap">
                    <div class="rj-route-head">
                        <h2>Your days on the ground</h2>
                        <p>The 5N / 6D route in detail, from the lakes of Srinagar to the meadows of Sonamarg.</p>
                    </div>

                    <ol class="rj-stops"
                        style="--rj-line-grad: linear-gradient(#1f8aa8, #6c7fd1, #3f9d5b, #d99a2b)">
                        <li class="rj-stop" style="--c:#1f8aa8">
                            <div class="rj-card">
                                <span class="rj-days">Days 1–2</span>
                                <h3>Srinagar, the Lake City</h3>
                                <p>Arrive in Srinagar and settle in before two days on and around the water: a
                                    shikara ride on Dal Lake, a stay on a houseboat, and a stroll through the Mughal
                                    gardens of Nishat and Shalimar.</p>
                            </div>
                        </li>
                        <li class="rj-stop" style="--c:#6c7fd1">
                            <div class="rj-card">
                                <span class="rj-days">Day 3</span>
                                <h3>Gulmarg, the Meadow of Flowers</h3>
                                <p>Head up to Gulmarg for wide alpine meadows and the gondola ride toward the
                                    higher slopes, with the peaks stretching out on every side.</p>
                            </div>
                        </li>
                        <li class="rj-stop" style="--c:#3f9d5b">
                            <div class="rj-card">
                                <span class="rj-days">Day 4</span>
                                <h3>Pahalgam, the Valley of Shepherds</h3>
                                <p>Continue to Pahalgam, where the Lidder river runs through pine forest. Walk by
                                    the water and visit Betaab Valley before a quiet evening.</p>
                            </div>
                        </li>
                        <li class="rj-stop" style="--c:#d99a2b">
                            <div class="rj-card">
                                <span class="rj-days">Days 5–6</span>
                                <h3>Sonamarg &amp; a last evening in Srinagar</h3>
                                <p>Drive to Sonamarg for glacier views and high meadows, then return to Srinagar
                                    for a final evening by the lake before your onward journey.</p>
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
                            <h2>Ready to see Kashmir?</h2>
                            <p>Tell us your dates and group size, and we'll shape the route around you.</p>
                        </div>
                        <a class="rj-btn rj-btn--gold"
                            href="mailto:hello@akashtourism.in?subject=Jammu%20%26%20Kashmir%20journey">Plan this journey ↗</a>
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