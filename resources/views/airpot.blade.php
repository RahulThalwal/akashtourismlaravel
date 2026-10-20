@php
    $airportFaqs = [
        [
            'question' => 'Do you track my flight?',
            'answer' => 'Yes. If your flight lands early or late, your driver adjusts the pickup time automatically.',
        ],
        [
            'question' => 'How early should I book?',
            'answer' => 'We recommend at least 24 hours ahead. Last-minute requests are accepted subject to availability.',
        ],
        [
            'question' => 'Are tolls and parking included?',
            'answer' => 'We state clearly in your quote what is included, so there are no surprises on the day.',
        ],
        [
            'question' => 'Can I add stops or change my booking?',
            'answer' => "Yes. Message us on WhatsApp and we'll update your booking.",
        ],
        [
            'question' => 'Can I pair this with a tour package?',
            'answer' => 'Absolutely. Airport transfers can be added to any Akash Tourism itinerary.',
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="en-IN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@include('partials.seo', [
    'seoTitle' => 'Airport Pickup & Drop Service in India | Akash Tourism',
    'seoDescription' => 'Book reliable airport pickup and drop transfers with Akash Tourism. Enjoy flight-tracked pickups, professional drivers, clean cars and clear fares.',
    'seoUrl' => route('airport-pickup-drop-service'),
    'seoImage' => asset('images/4871_13_9_2026_13_17_6_1_DSC_2298.jpeg'),
    'seoSchema' => [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'TaxiService',
                'name' => 'Akash Tourism Airport Pickup & Drop Service',
                'url' => route('airport-pickup-drop-service'),
                'description' => 'Airport pickup and drop transfers with flight tracking, professional drivers, clean cars and clear fares.',
                'telephone' => '+91-94592-32875',
                'areaServed' => ['Delhi', 'Jaipur', 'Srinagar', 'Chandigarh', 'India'],
                'provider' => [
                    '@type' => 'TravelAgency',
                    'name' => 'Akash Tourism',
                    'url' => rtrim(env('SEO_SITE_URL', 'https://akashjourney.com'), '/'),
                ],
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
                ], $airportFaqs),
            ],
        ],
    ],
])
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="site-shell">
@include('partials.navbar')
<main class="airport-page">
<section class="hero">
  <div class="wrap">
    <span class="eyebrow">Airport pickup &amp; drop</span>
    <h1>Land easy. <em>We'll be waiting.</em></h1>
    <p class="lead">Clean cars, professional drivers and flight-tracked pickups, so your journey starts and ends without the scramble for a cab.</p>
    <div class="cta"><a class="btn" href="#book">Book your transfer ↗</a><a class="btn ghost" href="tel:+919459232875">Call +91 94592 32875</a></div>
    <div class="stats">
      <div><b>24×7</b><span>Pickups &amp; drops</span></div>
      <div><b>Live</b><span>Flight tracking</span></div>
      <div><b>0</b><span>Hidden costs</span></div>
    </div>
  </div>
</section>

<section class="alt" id="services">
  <div class="wrap">
    <span class="eyebrow">What we offer</span>
    <h2>Transfers built <em>around your flight.</em></h2>
    <div class="grid g4">
      <div class="card media"><img src="/images/4871_13_9_2026_13_17_6_1_DSC_2298.jpeg" alt="Cars waiting at an airport pickup zone" loading="lazy"><div class="body"><span class="num">01</span><h3>Airport pickup</h3><p>Your driver is at arrivals with a name board, ready when you walk out.</p></div></div>
      <div class="card media"><img src="/images/paul-hanaoka-D-qq7W751vs-unsplash.jpg" alt="Driver navigating to the airport" loading="lazy"><div class="body"><span class="num">02</span><h3>Airport drop</h3><p>Reach the terminal early and relaxed, with time to spare before check-in.</p></div></div>
      <div class="card media"><img src="/images/waldemar-brandt-kYbYIWdJRh0-unsplash.jpg" alt="Illuminated taxi sign at night" loading="lazy"><div class="body"><span class="num">03</span><h3>Late &amp; early flights</h3><p>Midnight landings and 4 AM departures are routine for us. We run round the clock.</p></div></div>
      <div class="card accent"><span class="num">04</span><h3>Tour connections</h3><p>Combine your transfer with any Akash Tourism itinerary for one seamless trip.</p><a class="btn" href="#book">Plan my trip ↗</a></div>
    </div>
  </div>
</section>

<section class="fleet" id="cars">
  <div class="wrap">
    <span class="eyebrow">Cars available</span>
    <h2>The right ride <em>for your group.</em></h2>
    <div class="grid g4" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr))">
      <div class="card"><span class="seats">3<small>seater</small></span><h3>Compact sedan</h3><p>Ideal for solo travellers and couples with light luggage.</p><ul><li>Up to 3 passengers</li><li>AC &amp; 2 bags</li></ul></div>
      <div class="card"><span class="seats">5<small>seater</small></span><h3>Sedan / SUV</h3><p>Comfortable for families with room for luggage.</p><ul><li>Up to 5 passengers</li><li>AC &amp; 3–4 bags</li></ul></div>
      <div class="card"><span class="seats">7<small>seater</small></span><h3>Large SUV / MUV</h3><p>Best for bigger families and groups travelling together.</p><ul><li>Up to 7 passengers</li><li>AC &amp; extra luggage space</li></ul></div>
    </div>
  </div>
</section>

<section id="how">
  <div class="wrap">
    <span class="eyebrow">How it works</span>
    <h2>Three steps, <em>zero stress.</em></h2>
    <div class="grid g2" style="grid-template-columns:repeat(auto-fit,minmax(240px,1fr))">
      <div class="card"><span class="num">STEP 1</span><h3>Share your details</h3><p>Airport, date, flight number and pickup or drop address.</p></div>
      <div class="card"><span class="num">STEP 2</span><h3>Get a confirmed quote</h3><p>A clear fare and vehicle confirmation, with nothing added later.</p></div>
      <div class="card"><span class="num">STEP 3</span><h3>Meet your driver</h3><p>Driver details are shared before the trip. We track your flight for delays.</p></div>
    </div>
  </div>
</section>

<section class="advance" id="advance">
  <div class="wrap split">
    <div>
      <span class="eyebrow">Book in advance</span>
      <h2>Plan ahead, <em>travel calm.</em></h2>
      <p class="lead">Book your airport transfer at least 24 hours before your flight and your car, driver and fare are all confirmed before you travel.</p>
      <a class="btn" href="#book">Book in advance ↗</a>
    </div>
    <div class="perks">
      <div class="perk"><h3>Car guaranteed</h3><p>Your vehicle is reserved, even in peak travel season.</p></div>
      <div class="perk"><h3>Fare locked in</h3><p>The quoted price stays the same, with no surge or last-minute hikes.</p></div>
      <div class="perk"><h3>Driver details early</h3><p>Name, number and car details are shared before your trip.</p></div>
      <div class="perk"><h3>Easy changes</h3><p>Flight time changed? Message us on WhatsApp and we'll update the booking.</p></div>
    </div>
  </div>
</section>

<section class="alt">
  <div class="wrap">
    <span class="eyebrow">Why Akash Tourism</span>
    <h2>Reliable, <em>start to finish.</em></h2>
    <div class="grid g2">
      <div class="card"><h3>On time, every time</h3><p>Drivers arrive before you do. If your flight shifts, we adjust the pickup at no extra charge.</p></div>
      <div class="card"><h3>Transparent pricing</h3><p>What you're quoted is what you pay. Tolls and parking are stated upfront.</p></div>
      <div class="card"><h3>Clean, comfortable cars</h3><p>3, 5 and 7 seater cars for solo trips, families and groups, with room for your luggage.</p></div>
      <div class="card"><h3>Real people, real support</h3><p>Reach us by call or WhatsApp throughout your transfer, not just before you pay.</p></div>
    </div>
    <div class="chips"><span class="chip">Delhi (DEL)</span><span class="chip">Jaipur (JAI)</span><span class="chip">Srinagar (SXR)</span><span class="chip">Chandigarh (IXC)</span><span class="chip">Other airports on request</span></div>
  </div>
</section>

<section id="book">
  <div class="wrap book">
    <div>
      <span class="eyebrow">Book a transfer</span>
      <h2>Tell us <em>where &amp; when.</em></h2>
      <p class="lead">Send your details and we'll reply on WhatsApp with a confirmed fare and driver information.</p>
      <p style="margin-top:24px"><b>info@akashjourney.com</b><br><b>+91 94592 32875</b></p>
    </div>
    <form id="bookForm" class="card">
      <div><label for="name">Name</label><input id="name" required></div>
      <div><label for="phone">Phone</label><input id="phone" type="tel" required></div>
      <div><label for="type">Service</label><select id="type"><option>Airport pickup</option><option>Airport drop</option></select></div>
      <div><label for="airport">Airport</label><input id="airport" placeholder="e.g. Delhi T3" required></div>
      <div><label for="date">Date &amp; time</label><input id="date" type="datetime-local" required></div>
      <div><label for="flight">Flight no.</label><input id="flight" placeholder="Optional"></div>
      <div class="full"><label for="addr">Drop / pickup address</label><input id="addr" required></div>
      <div><label for="pax">Passengers</label><input id="pax" type="number" min="1" value="2"></div>
      <div><label for="car">Vehicle</label><select id="car"><option>3 seater</option><option>5 seater</option><option>7 seater</option></select></div>
      <div class="full"><button class="btn" type="submit" style="width:100%">Send on WhatsApp ↗</button></div>
    </form>
  </div>
</section>

<section class="alt">
  <div class="wrap" style="max-width:780px">
    <span class="eyebrow">Good to know</span>
    <h2>Common <em>questions.</em></h2>
    @foreach ($airportFaqs as $faq)
      <details><summary>{{ $faq['question'] }}</summary><p>{{ $faq['answer'] }}</p></details>
    @endforeach
  </div>
</section>
</main>

@include('partials.footer')
</div>

<div class="search-modal" role="dialog" aria-modal="true" aria-label="Search destinations" hidden>
  <div class="search-panel">
    <button class="modal-close" type="button" aria-label="Close search">×</button>
    <p class="eyebrow dark"><span></span> Find your next story</p>
    <h2>Where will you<br><em>wander?</em></h2>
    <form data-search-form>
      <label for="destination-search">Search a place</label>
      <div class="search-input">
        <input id="destination-search" type="search" placeholder="Try 'mountains' or 'Agra'">
        <button type="submit" aria-label="Submit search">↗</button>
      </div>
      <p class="search-result" aria-live="polite"></p>
    </form>
  </div>
</div>

<script>
document.getElementById('bookForm').addEventListener('submit',function(e){
  e.preventDefault();
  var v=function(id){return document.getElementById(id).value.trim()};
  var msg=['*Airport transfer enquiry*','Service: '+v('type'),'Name: '+v('name'),'Phone: '+v('phone'),'Airport: '+v('airport'),'Date & time: '+v('date').replace('T',' '),'Flight: '+(v('flight')||'-'),'Address: '+v('addr'),'Passengers: '+v('pax'),'Vehicle: '+v('car')].join('\n');
  window.open('https://wa.me/919459232875?text='+encodeURIComponent(msg),'_blank');
});
</script>
</body>
</html>