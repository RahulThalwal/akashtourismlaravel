<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo', [
        'seoTitle' => 'Travel Services | Akash Tourism',
        'seoDescription' =>
            'Plan a more thoughtful India journey with Akash Tourism: custom itineraries, handpicked stays, local experiences, and seamless transport.',
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => 'Akash Tourism Travel Services',
            'provider' => ['@type' => 'TravelAgency', 'name' => 'Akash Tourism'],
            'description' =>
                'Custom itineraries, handpicked stays, local experiences, and seamless transport across India.',
        ],
    ])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="services-page">
    <div class="site-shell">
        @include('partials.navbar')
        <main>
            <section class="services-hero">
                <div>
                    <p class="eyebrow"><span></span> The Akash Tourism way</p>
                    <h1>Travel,<br><em>thoughtfully.</em></h1>
                    <p class="services-lede">You bring the curiosity. We bring the local knowledge, considered details,
                        and breathing room that turn a trip into a story.</p><a class="primary-button"
                        href="#service-list">See how we help <span>↓</span></a>
                </div>
                <div class="services-hero-image"><img
                        src="https://images.unsplash.com/photo-1518002054494-3a6f94352e9d?auto=format&fit=crop&w=1200&q=85"
                        alt="A quiet traditional Indian courtyard"><span>DESIGNED AROUND YOU / 01</span></div>
            </section>
            <section class="service-list-section" id="service-list">
                <div class="services-intro">
                    <p class="eyebrow dark"><span></span> More than a booking</p>
                    <h2>Everything you need.<br><em>Nothing you don’t.</em></h2>
                    <p>Our services are flexible by design. Choose one piece, or let us shape the full journey from
                        first idea to final goodbye.</p>
                </div>
                <div class="service-list">
                    <article class="service-row"><span class="service-index">01</span>
                        <div class="service-icon">✦</div>
                        <div>
                            <h3>Journey design</h3>
                            <p>Personal itineraries shaped around your pace, your people, and the places you actually
                                want to feel.</p>
                        </div><span class="service-arrow">↗</span>
                    </article>
                    <article class="service-row"><span class="service-index">02</span>
                        <div class="service-icon">⌂</div>
                        <div>
                            <h3>Handpicked stays</h3>
                            <p>From heritage havelis to hillside cabins, stay somewhere with a sense of place and a
                                story of its own.</p>
                        </div><span class="service-arrow">↗</span>
                    </article>
                    <article class="service-row"><span class="service-index">03</span>
                        <div class="service-icon">◌</div>
                        <div>
                            <h3>Local experiences</h3>
                            <p>Meet the makers, cooks, guides, and storytellers who make each destination more than a
                                backdrop.</p>
                        </div><span class="service-arrow">↗</span>
                    </article>
                    <article class="service-row"><span class="service-index">04</span>
                        <div class="service-icon">↝</div>
                        <div>
                            <h3>Seamless movement</h3>
                            <p>Thoughtful transfers, trusted drivers, and the right route between every beautiful stop.
                            </p>
                        </div><span class="service-arrow">↗</span>
                    </article>
                </div>
            </section>
            <section class="packages-section" id="packages">
                <div class="packages-heading">
                    <div>
                        <p class="eyebrow dark"><span></span> Ready-made escapes</p>
                        <h2>Pick a place.<br><em>We’ll shape the rest.</em></h2>
                    </div>
                    <p>Short on time? Start with one of our thoughtfully paced packages. Every route can be made
                        completely yours.</p>
                </div>
                <div class="packages-grid">
                    <article class="package-card">
                        <div class="package-photo"><img
                                src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=800&q=85"
                                alt="Delhi skyline and Jama Masjid"><span>01 / CULTURE</span></div>
                        <div class="package-content">
                            <div class="package-topline">
                                <h3>Delhi in full colour</h3><strong>2 Days / 1 Night</strong>
                            </div>
                            <p>Old Delhi walks, a chef-led food trail, Humayun’s Tomb at golden hour.</p>
                            <div class="package-bottom"><span>From <b>₹12,500</b> / person</span><a
                                    href="{{ route('destinations.show', 'delhi') }}">View destination <i>↗</i></a>
                            </div>
                        </div>
                    </article>
                    <article class="package-card">
                        <div class="package-photo"><img
                                src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=800&q=85"
                                alt="Taj Mahal in Agra"><span>02 / HERITAGE</span></div>
                        <div class="package-content">
                            <div class="package-topline">
                                <h3>Agra, unhurried</h3><strong>2 Days / 1 Night</strong>
                            </div>
                            <p>Sunrise at the Taj, marble craft, Mehtab Bagh and a Mughal-inspired dinner.</p>
                            <div class="package-bottom"><span>From <b>₹14,800</b> / person</span><a
                                    href="{{ route('destinations.show', 'agra') }}">View destination <i>↗</i></a></div>
                        </div>
                    </article>
                    <article class="package-card">
                        <div class="package-photo"><img
                                src="https://images.unsplash.com/photo-1595815771614-ade9d652a65d?auto=format&fit=crop&w=800&q=85"
                                alt="Mountain lake in Jammu and Kashmir"><span>03 / MOUNTAINS</span></div>
                        <div class="package-content">
                            <div class="package-topline">
                                <h3>Kashmir, softly</h3><strong>4 Days / 3 Nights</strong>
                            </div>
                            <p>Dal Lake mornings, a houseboat stay, Gulmarg air and a quiet alpine picnic.</p>
                            <div class="package-bottom"><span>From <b>₹28,900</b> / person</span><a
                                    href="{{ route('destinations.show', 'jammu-kashmir') }}">View destination
                                    <i>↗</i></a></div>
                        </div>
                    </article>
                    <article class="package-card">
                        <div class="package-photo"><img
                                src="https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?auto=format&fit=crop&w=800&q=85"
                                alt="Himalayan valley in Himachal Pradesh"><span>04 / SLOW TRAVEL</span></div>
                        <div class="package-content">
                            <div class="package-topline">
                                <h3>Himachal, slowly</h3><strong>5 Days / 4 Nights</strong>
                            </div>
                            <p>Forest walks, a mountain homestay, local cafés and mornings with no agenda.</p>
                            <div class="package-bottom"><span>From <b>₹31,500</b> / person</span><a
                                    href="{{ route('destinations.show', 'himachal-pradesh') }}">View destination
                                    <i>↗</i></a></div>
                        </div>
                    </article>
                    <article class="package-card">
                        <div class="package-photo"><img
                                src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=800&q=85"
                                alt="Fort and desert landscape in Rajasthan"><span>05 / HERITAGE</span></div>
                        <div class="package-content">
                            <div class="package-topline">
                                <h3>Rajasthan, royally</h3><strong>6 Days / 5 Nights</strong>
                            </div>
                            <p>Forts of Jaipur, blue lanes of Jodhpur, a desert camel safari in Jaisalmer, and sunset on
                                Udaipur's lakes.</p>
                            <div class="package-bottom"><span>From <b>₹32,500</b> / person</span><a
                                href="{{ route('destinations.rajasthan') }}">View destination <i>↗</i></a></div>
                        </div>
                    </article>
                </div>
            </section>
            <section class="service-process">
                <p class="eyebrow"><span></span> Simple from here</p>
                <h2>Three steps to<br><em>somewhere new.</em></h2>
                <div class="process-grid">
                    <div><strong>01</strong>
                        <h3>Tell us your feeling</h3>
                        <p>Slow mornings, big landscapes, full plates. Start with what you want more of.</p>
                    </div>
                    <div><strong>02</strong>
                        <h3>We find the thread</h3>
                        <p>Our local team connects the dots into a route that feels entirely yours.</p>
                    </div>
                    <div><strong>03</strong>
                        <h3>You go be there</h3>
                        <p>Arrive with everything considered, leaving plenty of room for the unexpected.</p>
                    </div>
                </div>
            </section>
            <section class="service-cta">
                <div>
                    <p class="eyebrow dark"><span></span> Ready when you are</p>
                    <h2>Let’s make a little<br><em>room for wonder.</em></h2>
                </div><a class="primary-button" href="mailto:hello@wanderly.in">Plan my journey <span>↗</span></a>
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
