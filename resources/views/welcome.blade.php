<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo', [
        'seoTitle' => 'Akash Tourism | Thoughtful journeys across India',
        'seoDescription' =>
            'Discover thoughtful journeys through Delhi, Agra, Jammu & Kashmir, and Himachal Pradesh with Akash Tourism.',
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'TravelAgency',
            'name' => 'Akash Tourism',
            'url' => 'https://akashtourism.in',
            'description' => 'Thoughtful journeys across India.',
            'areaServed' => ['Delhi', 'Agra', 'Jammu & Kashmir', 'Himachal Pradesh'],
        ],
    ])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="site-shell">
        @include('partials.navbar')
        <main id="top">
            <section class="hero-section">
                <div class="hero-copy">
                    <p class="eyebrow"><span></span> Curated journeys, made personal</p>
                    <h1>Go where<br><em>stories begin.</em></h1>
                    <p class="hero-intro">From ancient cities to wild mountain air, discover the India that stays with
                        you long after you leave.</p><a class="primary-button" href="#destinations">Start exploring
                        <span>↗</span></a>
                    <div class="hero-stats">
                        <div><strong>04</strong><span>iconic regions</span></div>
                        <div><strong>48</strong><span>handpicked stays</span></div>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-image image-overlay" data-destination-carousel></div>
                    <div class="hero-caption"><span data-carousel-number>01</span><strong data-carousel-title>THE
                            CAPITAL OF CONTRASTS</strong><small data-carousel-location>Delhi, India</small></div>
                    <div class="scroll-note"><span class="scroll-line"></span> Scroll to wander</div>
                </div>
            </section>
            <section class="explore-section" id="destinations">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow dark"><span></span> Your next chapter</p>
                        <h2>Choose your<br><em>kind of escape.</em></h2>
                    </div>
                    <p class="section-note">Four moods. A thousand ways to feel alive. Follow the feeling and we’ll take
                        care of the rest.</p>
                </div>
                <div class="filter-row" role="group" aria-label="Filter destinations"><button
                        class="filter-chip active" type="button" data-filter="all">All places</button><button
                        class="filter-chip" type="button" data-filter="culture">Culture & heritage</button><button
                        class="filter-chip" type="button" data-filter="mountains">Mountains & wild</button><button
                        class="filter-chip" type="button" data-filter="slow">Slow travel</button></div>
                <div class="destination-grid">
                    <article class="destination-card" data-category="culture">
                        <div class="card-image"><img
                                src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1000&q=85"
                                alt="Jama Masjid in Delhi at sunset"><span class="card-number">01</span><button
                                class="save-button" type="button" aria-label="Save Delhi destination">♡</button></div>
                        <div class="card-body">
                            <div>
                                <p class="card-kicker">The capital of contrasts</p>
                                <h3>Delhi</h3>
                            </div><span class="card-arrow">↗</span>
                            <p class="card-detail">Bazaars, bold flavours & old-world stories</p>
                        </div>
                    </article>
                    <article class="destination-card" data-category="culture">
                        <div class="card-image"><img
                                src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1000&q=85"
                                alt="The Taj Mahal in Agra reflected in water"><span
                                class="card-number">02</span><button class="save-button" type="button"
                                aria-label="Save Agra destination">♡</button></div>
                        <div class="card-body">
                            <div>
                                <p class="card-kicker">A monument to wonder</p>
                                <h3>Agra</h3>
                            </div><span class="card-arrow">↗</span>
                            <p class="card-detail">Marble mornings & Mughal magic</p>
                        </div>
                    </article>
                    <article class="destination-card" data-category="mountains">
                        <div class="card-image"><img
                                src="https://images.unsplash.com/photo-1595815771614-ade9d652a65d?auto=format&fit=crop&w=1000&q=85"
                                alt="Snowy mountains and a lake in Kashmir"><span class="card-number">03</span><button
                                class="save-button" type="button"
                                aria-label="Save Jammu and Kashmir destination">♡</button></div>
                        <div class="card-body">
                            <div>
                                <p class="card-kicker">Where the earth exhales</p>
                                <h3>J&K</h3>
                            </div><span class="card-arrow">↗</span>
                            <p class="card-detail">Alpine lakes, cedar forests & quiet</p>
                        </div>
                    </article>
                    <article class="destination-card" data-category="mountains slow">
                        <div class="card-image"><img
                                src="https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?auto=format&fit=crop&w=1000&q=85"
                                alt="Himalayan valley in Himachal Pradesh"><span class="card-number">04</span><button
                                class="save-button" type="button"
                                aria-label="Save Himachal Pradesh destination">♡</button></div>
                        <div class="card-body">
                            <div>
                                <p class="card-kicker">Take the scenic route</p>
                                <h3>Himachal</h3>
                            </div><span class="card-arrow">↗</span>
                            <p class="card-detail">Pine trails, mountain cafés & slow days</p>
                        </div>
                    </article>
                </div>
            </section>
            <section class="testimonials-section" aria-labelledby="traveller-notes-title">
                <div class="testimonials-heading">
                    <p class="eyebrow dark"><span></span> Traveller notes</p>
                    <h2 id="traveller-notes-title">Loved by people<br>who <em>wander.</em></h2>
                    <div class="rating-line"><strong>4.9</strong><span>★★★★★</span><small>from 280+ journeys</small>
                    </div>
                </div>
                <div class="testimonial-list">
                    <article class="testimonial-card">
                        <div class="quote-mark">“</div>
                        <blockquote>Akash Tourism helped us find the quiet side of Kashmir. Every recommendation felt
                            like it came from a friend who really knows the place.</blockquote>
                        <div class="traveller"><span class="avatar avatar-one">AS</span>
                            <div><strong>Ananya & Sameer</strong><small>Delhi to Srinagar · 9 days</small></div>
                        </div>
                    </article>
                    <article class="testimonial-card featured-testimonial">
                        <div class="quote-mark">“</div>
                        <blockquote>Our Agra morning was pure magic. No rushed checklist, just the right place at the
                            right time and a memory we still talk about.</blockquote>
                        <div class="traveller"><span class="avatar avatar-two">RK</span>
                            <div><strong>Rhea Kapoor</strong><small>Mumbai to Agra · 3 days</small></div>
                        </div>
                    </article>
                    <article class="testimonial-card">
                        <div class="quote-mark">“</div>
                        <blockquote>We came for the mountains and stayed for the slow mornings. Himachal through Akash
                            Tourism is thoughtful, warm, and beautifully unhurried.</blockquote>
                        <div class="traveller"><span class="avatar avatar-three">MV</span>
                            <div><strong>Meera Varma</strong><small>Bengaluru to Himachal · 7 days</small></div>
                        </div>
                    </article>
                </div>
            </section>
            @include('partials.latest-blogs', ['blogs' => $latestBlogs])
            <section class="journal-strip" id="journal">
                <div class="journal-copy">
                    <p class="eyebrow"><span></span> From the journal</p>
                    <h2>Leave room<br>for the <em>unexpected.</em></h2><a class="text-link" href="#journal">Read the
                        field notes <span>↗</span></a>
                </div>
                <div class="journal-image"><img
                        src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1200&q=85"
                        alt="Colourful street in Jaipur">
                    <div class="journal-label">Field note / 08</div>
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
