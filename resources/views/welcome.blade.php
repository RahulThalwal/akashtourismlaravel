@php
    $homeFaqs = [
        [
            'question' => 'What are the best tourist places to visit in India?',
            'answer' => 'India offers a wide range of destinations, including Rajasthan for royal palaces and heritage, Kerala for backwaters, Goa for beaches, Kashmir for mountain scenery, Himachal Pradesh for hill stations, and Agra for the Taj Mahal. The best destination depends on your interests, budget, and travel dates.',
        ],
        [
            'question' => 'What is the best time to visit India?',
            'answer' => 'October to March is generally a popular time to explore many parts of India because of the milder weather. Summer is suitable for several Himalayan destinations, while the monsoon season offers lush landscapes in places such as Kerala and Meghalaya. The ideal time varies by region.',
        ],
        [
            'question' => 'How much does an India tour package cost?',
            'answer' => 'The cost of an India tour package depends on the destination, trip duration, hotel category, transport, meals, and activities. Budget trips can be more affordable, while luxury holidays and customised itineraries cost more. Request a personalised quote to match your travel budget.',
        ],
        [
            'question' => 'Which are the best places to visit in India with family?',
            'answer' => 'Popular family holiday destinations include Jaipur, Udaipur, Kerala, Goa, Shimla, Manali, Ooty, and Mysuru. Families can choose from sightseeing tours, nature experiences, wildlife parks, cultural attractions, and relaxing resort stays.',
        ],
        [
            'question' => 'Which are the best honeymoon destinations in India?',
            'answer' => 'Kashmir, Manali, Shimla, Udaipur, Kerala, Andaman and Nicobar Islands, and Goa are popular honeymoon choices. Couples can select a destination based on whether they prefer mountains, beaches, romantic houseboat stays, luxury resorts, or sightseeing.',
        ],
        [
            'question' => 'How can I plan a trip to India on a budget?',
            'answer' => 'To plan an affordable India trip, book transport in advance, compare accommodation options, travel during the shoulder season, and prioritise destinations within the same region. Choosing a customised package can also help you manage transport, hotel, and sightseeing expenses.',
        ],
        [
            'question' => 'Which are the best hill stations to visit in India?',
            'answer' => 'Popular hill stations include Manali, Shimla, Mussoorie, Darjeeling, Ooty, Munnar, Coorg, and Nainital. The best choice depends on the season, preferred activities, accessibility, and whether you want adventure, relaxation, or scenic views.',
        ],
        [
            'question' => 'Which are the best beach destinations in India?',
            'answer' => 'Goa, the Andaman and Nicobar Islands, Lakshadweep, Varkala, and Gokarna are popular beach destinations. Travellers can enjoy beach relaxation, water activities, coastal scenery, and local cuisine, depending on the destination and season.',
        ],
        [
            'question' => 'How many days are enough to explore India?',
            'answer' => 'A short trip of 3–5 days is suitable for one city or a nearby region. A 7–10-day itinerary allows travellers to explore several destinations within one region, while a longer trip is better for discovering multiple parts of India.',
        ],
        [
            'question' => 'What are the best places for a weekend trip in India?',
            'answer' => 'Popular weekend destinations include Rishikesh, Jaipur, Agra, Mussoorie, Lonavala, Udaipur, and Pondicherry. The best option depends on your departure city, available travel time, and preferred experience.',
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com">
    @include('partials.seo', [
        'seoTitle' => 'Akash Tourism | Thoughtful journeys across India',
        'seoDescription' =>
            'Discover thoughtful journeys through Delhi, Agra, Jammu & Kashmir, and Himachal Pradesh with Akash Tourism.',
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'TravelAgency',
                    'name' => 'Akash Tourism',
                    'url' => rtrim(env('SEO_SITE_URL', 'https://akashjourney.com'), '/'),
                    'description' => 'Thoughtful journeys across India.',
                    'areaServed' => ['Delhi', 'Agra', 'Jammu & Kashmir', 'Himachal Pradesh'],
                ],
                [
                    '@type' => 'FAQPage',
                    'mainEntity' => array_map(fn (array $faq) => [
                        '@type' => 'Question',
                        'name' => $faq['question'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $faq['answer'],
                        ],
                    ], $homeFaqs),
                ],
            ],
        ],
    ])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="site-shell">
        @include('partials.navbar')
        <main id="top">
            <section class="hero-section home-hero">
                <div class="hero-copy home-hero-copy">
                    <p class="eyebrow"><span></span> India, thoughtfully discovered</p>
                    <h1>Find your way<br>to <em>somewhere real.</em></h1>
                    <p class="hero-intro">From old-city lanes to open Himalayan skies, discover India through places
                        and experiences that stay with you.</p>
                    <div class="home-hero-actions">
                        <a class="primary-button" href="#destinations">Explore destinations <span>↗</span></a>
                        <a class="hero-secondary-link" href="{{ route('contact') }}">Plan a journey <span>↗</span></a>
                    </div>
                    <div class="hero-stats">
                        <div><strong>04</strong><span>iconic regions</span></div>
                        <div><strong>48</strong><span>handpicked stays</span></div>
                    </div>
                </div>
                <div class="hero-visual home-hero-visual">
                    <div class="hero-image image-overlay" data-destination-carousel>
                        <img class="hero-slide-image"
                            src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=800&q=76"
                            srcset="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=480&q=76 480w, https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=800&q=76 800w, https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1200&q=76 1200w"
                            sizes="(max-width: 900px) 100vw, 50vw" alt="" fetchpriority="high" decoding="async">
                    </div>
                    <div class="hero-image-badge"><span></span> Journeys made around you</div>
                    <div class="hero-caption"><span data-carousel-number>01</span><strong data-carousel-title>THE
                            CAPITAL OF CONTRASTS</strong><small data-carousel-location>Delhi, India</small></div>
                    <div class="scroll-note"><span class="scroll-line"></span> Scroll to wander</div>
                </div>
            </section>
            <section class="explore-section" id="destinations">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow dark"><span></span> Your next chapter</p>
                        <h2>Choose your<em> kind of escape.</em></h2>
                    </div>
                </div>
                <div class="filter-row" role="group" aria-label="Filter destinations"><button
                        class="filter-chip active" type="button" data-filter="all">All places</button><button
                        class="filter-chip" type="button" data-filter="culture">Culture & heritage</button><button
                        class="filter-chip" type="button" data-filter="mountains">Mountains & wild</button><button
                        class="filter-chip" type="button" data-filter="slow">Slow travel</button></div>
                <div class="destination-grid">
                    <article class="destination-card" data-category="culture">
                        <div class="card-image">
                            <a class="destination-card-link" href="{{ route('destinations.show', 'delhi') }}">
                                <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=700&q=75"
                                    alt="Jama Masjid in Delhi at sunset" loading="lazy" decoding="async">
                                <span class="card-number">01</span>
                                <div class="card-body">
                                    <div>
                                        <p class="card-kicker">The capital of contrasts</p>
                                        <h3>Delhi</h3>
                                    </div>
                                    <p class="card-detail">Bazaars, bold flavours & old-world stories</p>
                                </div>
                            </a>
                            <button class="save-button" type="button" aria-label="Save Delhi destination">♡</button>
                        </div>
                    </article>
                    <article class="destination-card" data-category="culture">
                        <div class="card-image">
                            <a class="destination-card-link" href="{{ route('destinations.show', 'agra') }}">
                                <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=700&q=75"
                                    alt="The Taj Mahal in Agra reflected in water" loading="lazy" decoding="async">
                                <span class="card-number">02</span>
                                <div class="card-body">
                                    <div>
                                        <p class="card-kicker">A monument to wonder</p>
                                        <h3>Agra</h3>
                                    </div>
                                    <p class="card-detail">Marble mornings & Mughal magic</p>
                                </div>
                            </a>
                            <button class="save-button" type="button" aria-label="Save Agra destination">♡</button>
                        </div>
                    </article>
                    <article class="destination-card" data-category="mountains">
                        <div class="card-image">
                            <a class="destination-card-link" href="{{ route('destinations.show', 'jammu-kashmir') }}">
                                <img src="https://images.unsplash.com/photo-1595815771614-ade9d652a65d?auto=format&fit=crop&w=700&q=75"
                                    alt="Snowy mountains and a lake in Kashmir" loading="lazy" decoding="async">
                                <span class="card-number">03</span>
                                <div class="card-body">
                                    <div>
                                        <p class="card-kicker">Where the earth exhales</p>
                                        <h3>J&K</h3>
                                    </div>
                                    <p class="card-detail">Alpine lakes, cedar forests & quiet</p>
                                </div>
                            </a>
                            <button class="save-button" type="button"
                                aria-label="Save Jammu and Kashmir destination">♡</button>
                        </div>
                    </article>
                    <article class="destination-card" data-category="mountains slow">
                        <div class="card-image">
                            <a class="destination-card-link"
                                href="{{ route('destinations.show', 'himachal-pradesh') }}">
                                <img src="https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?auto=format&fit=crop&w=700&q=75"
                                    alt="Himalayan valley in Himachal Pradesh" loading="lazy" decoding="async">
                                <span class="card-number">04</span>
                                <div class="card-body">
                                    <div>
                                        <p class="card-kicker">Take the scenic route</p>
                                        <h3>Himachal</h3>
                                    </div>
                                    <p class="card-detail">Pine trails, mountain cafés & slow days</p>
                                </div>
                            </a>
                            <button class="save-button" type="button"
                                aria-label="Save Himachal Pradesh destination">♡</button>
                        </div>
                    </article>
                    <article class="destination-card" data-category="heritage desert">
                        <div class="card-image">
                            <a class="destination-card-link" href="{{ route('destinations.rajasthan') }}">
                                <img src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=700&q=75"
                                    alt="Desert fort in Rajasthan" loading="lazy" decoding="async">
                                <span class="card-number">05</span>
                                <div class="card-body">
                                    <div>
                                        <p class="card-kicker">A kingdom of sand and stone</p>
                                        <h3>Rajasthan</h3>
                                    </div>
                                    <p class="card-detail">Desert forts, painted cities & royal nights</p>
                                </div>
                            </a>
                            <button class="save-button" type="button"
                                aria-label="Save Rajasthan destination">♡</button>
                        </div>
                    </article>
                </div>
            </section>
            <section class="why-section" id="why-choose-us"
                data-bg-image="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=1200&q=75">
                <div class="why-overlay"></div>
                <div class="why-content">
                    <div class="section-heading">
                        <div>
                            <p class="eyebrow"><span></span> Why travel with us</p>
                            <h2>Journeys built<br><em>around you.</em></h2>
                        </div>
                        <p class="section-note">No cookie-cutter packages. Just honest planning, local know-how, and
                            support that doesn't disappear once you've booked.</p>
                    </div>
                    <div class="why-grid">
                        <article class="why-card">
                            <span class="why-number">01</span>
                            <h3>Local, not generic</h3>
                            <p>Every route is shaped by people who've actually walked it — not a template swapped
                                between cities.</p>
                        </article>
                        <article class="why-card">
                            <span class="why-number">02</span>
                            <h3>Real-time support</h3>
                            <p>A trip changes shape once you're on the road. We're reachable throughout, not just
                                before you pay.</p>
                        </article>
                        <article class="why-card">
                            <span class="why-number">03</span>
                            <h3>Handpicked stays</h3>
                            <p>Every property we recommend has been vetted for comfort, character, and genuine
                                hospitality.</p>
                        </article>
                        <article class="why-card">
                            <span class="why-number">04</span>
                            <h3>No hidden costs</h3>
                            <p>What you're quoted is what you pay. Transparent pricing from the first itinerary draft
                                onward.</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class="testimonials-section" aria-labelledby="traveller-notes-title">
                <div class="testimonials-heading">
                    <p class="eyebrow dark"> Traveller notes</p>
                    <h2 id="traveller-notes-title">Loved by people who <em>wander.</em></h2>
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

            <section class="home-faq" aria-labelledby="home-faq-title">
                <div class="home-faq-inner">
                    <span class="eyebrow">Good to know</span>
                    <h2 id="home-faq-title">Common <em>questions.</em></h2>
                    @foreach ($homeFaqs as $faq)
                        <details class="home-faq-item">
                            <summary>{{ $faq['question'] }}</summary>
                            <p>{{ $faq['answer'] }}</p>
                        </details>
                    @endforeach
                </div>
            </section>

            <section class="journal-strip" id="journal">
                <div class="journal-bg"
                    data-bg-image="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1200&q=75">
                </div>
                <div class="journal-overlay"></div>
                <div class="journal-copy">
                    <p class="eyebrow"><span></span> From the journal</p>
                    <h2>Leave room<br>for the <em>unexpected.</em></h2>
                    <a class="text-link" href="#journal">Read the field notes <span>↗</span></a>
                </div>
                <div class="journal-contact">
                    <h3>Plan Your Next Trip.</h3>
                    <form class="contact-form" method="POST" action="{{ route('contact.submit') ?? '#' }}">
                        @csrf
                        <div class="form-row">
                            <label for="jc-name">Name</label>
                            <input id="jc-name" name="name" type="text" placeholder="Your name" required>
                        </div>
                        <div class="form-row">
                            <label for="jc-email">Email</label>
                            <input id="jc-email" name="email" type="email" placeholder="you@email.com"
                                required>
                        </div>
                        <div class="form-row">
                            <label for="jc-message">Message</label>
                            <textarea id="jc-message" name="message" rows="3" placeholder="Tell us where you'd like to go" required></textarea>
                        </div>
                        <button type="submit" class="form-submit">Send message <span>↗</span></button>
                    </form>
                </div>
            </section>
        </main>
        @include('partials.footer')
    </div>
    @include('partials.contact-success-popup')
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
