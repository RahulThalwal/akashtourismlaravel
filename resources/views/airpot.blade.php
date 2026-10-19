<!DOCTYPE html>
<html lang="en-IN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Airport Pickup & Drop Service | Akash Tourism</title>
<meta name="description" content="Reliable airport pickup and drop services with Akash Tourism. Flight-tracked pickups, professional drivers, clean cars and transparent pricing across India.">
<link rel="canonical" href="https://akashjourney.com/airport-pickup-drop-service">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;1,400&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
:root{
  /* Swap these for the exact tokens from your site CSS */
  --surface:#faf7f2; --card:#ffffff; --ink:#16130f; --muted:#6b6459; --line:#e7e0d4;
  --orange:#e7623a; --orange-ink:#ffffff;
  --font-display:'Fraunces',Georgia,serif; --font-body:'Inter',system-ui,sans-serif; --font-mono:'JetBrains Mono',monospace;
  --radius-round:999px; --radius:18px;
  --hero-img:url('/images/giftey-dhaliwal-5HeeJU4gzBA-unsplash.jpg');
}
@media (prefers-color-scheme:dark){
  :root{--surface:#14110e;--card:#1d1914;--ink:#f5efe6;--muted:#a79f92;--line:#2e2820}
}
*{box-sizing:border-box;margin:0}
body{font-family:var(--font-body);background:var(--surface);color:var(--ink);line-height:1.6}
a{color:inherit;text-decoration:none}
.wrap{max-width:1120px;margin:0 auto;padding:0 24px}
section{padding:80px 0}
.eyebrow{font-family:var(--font-mono);font-size:.75rem;letter-spacing:.12em;text-transform:uppercase;color:var(--orange)}
h1,h2,h3{font-family:var(--font-display);font-weight:400;line-height:1.1}
h1{font-size:clamp(2.6rem,7vw,5rem);margin:14px 0 20px}
h2{font-size:clamp(1.9rem,4vw,3rem);margin:10px 0 16px}
h3{font-size:1.3rem;font-weight:600;margin-bottom:6px}
em{font-style:italic;color:var(--orange)}
.lead{color:var(--muted);font-size:1.1rem;max-width:560px}
.btn{display:inline-block;padding:14px 26px;border-radius:var(--radius-round);font-weight:600;border:1.5px solid var(--orange);background:var(--orange);color:var(--orange-ink);cursor:pointer;font-size:1rem;font-family:inherit}
.btn.ghost{background:transparent;color:var(--ink);border-color:var(--line)}
.btn:hover{filter:brightness(1.06)}
.hero{padding:120px 0 130px;color:#fff;background:linear-gradient(90deg,rgba(15,11,8,.82) 0%,rgba(15,11,8,.55) 55%,rgba(15,11,8,.35) 100%),var(--hero-img) center/cover no-repeat}
.hero .lead,.hero .stats span{color:rgba(255,255,255,.82)}
.hero .btn.ghost{color:#fff;border-color:rgba(255,255,255,.5)}
.hero em{color:#ff8a63}
.hero .cta{display:flex;gap:12px;flex-wrap:wrap;margin-top:28px}
.stats{display:flex;gap:40px;margin-top:48px;flex-wrap:wrap}
.stats b{font-family:var(--font-display);font-size:2.2rem;display:block}
.stats span{color:var(--muted);font-size:.9rem}
.grid{display:grid;gap:20px;margin-top:36px}
.g2{grid-template-columns:repeat(auto-fit,minmax(300px,1fr))}
.g4{grid-template-columns:repeat(auto-fit,minmax(230px,1fr))}
.card{background:var(--card);border:1px solid var(--line);border-radius:var(--radius);padding:28px}
.card p{color:var(--muted);font-size:.97rem}
.num{font-family:var(--font-mono);color:var(--orange);font-size:.85rem;display:block;margin-bottom:14px}
.chips{display:flex;flex-wrap:wrap;gap:10px;margin-top:24px}
.chip{border:1px solid var(--line);border-radius:var(--radius-round);padding:8px 18px;background:var(--card);font-size:.92rem}
.card.media{padding:0;overflow:hidden}
.card.media img{display:block;width:100%;height:190px;object-fit:cover}
.card.media .body{padding:24px 28px 28px}
.card.accent{background:var(--orange);border-color:var(--orange)}
.alt .card.accent{background:var(--orange)}
.card.accent h3,.card.accent p,.card.accent .num{color:#fff}
.card.accent .btn{margin-top:18px;background:#fff;color:var(--orange);border-color:#fff;padding:10px 20px}
.fleet .card{display:flex;flex-direction:column;gap:6px}
.fleet .seats{font-family:var(--font-display);font-size:3.2rem;line-height:1;color:var(--orange)}
.fleet .seats small{font-size:1rem;color:var(--muted);font-family:var(--font-body);margin-left:6px}
.fleet ul{list-style:none;padding:0;margin-top:10px;display:grid;gap:6px;color:var(--muted);font-size:.93rem}
.fleet li::before{content:"✓ ";color:var(--orange);font-weight:600}
.advance{background:var(--orange);color:#fff}
.advance .eyebrow{color:rgba(255,255,255,.8)}
.advance em{color:#fff;text-decoration:underline;text-decoration-thickness:2px;text-underline-offset:6px}
.advance .lead{color:rgba(255,255,255,.88)}
.advance .split{display:grid;grid-template-columns:1fr 1.1fr;gap:48px;align-items:center}
.advance .perks{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.advance .perk{background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.28);border-radius:var(--radius);padding:22px}
.advance .perk h3{font-size:1.1rem;margin-bottom:4px}
.advance .perk p{font-size:.92rem;color:rgba(255,255,255,.88)}
.advance .btn{background:#fff;color:var(--orange);border-color:#fff;margin-top:26px}
@media(max-width:820px){.advance .split{grid-template-columns:1fr}.advance .perks{grid-template-columns:1fr}}
.alt{background:var(--card);border-block:1px solid var(--line)}
.alt .card{background:var(--surface)}
details{border-bottom:1px solid var(--line);padding:18px 0}
summary{cursor:pointer;font-weight:600;list-style:none;display:flex;justify-content:space-between}
summary::after{content:"+";color:var(--orange);font-size:1.3rem}
details[open] summary::after{content:"–"}
details p{color:var(--muted);margin-top:10px}
form{display:grid;gap:14px;grid-template-columns:1fr 1fr}
form .full{grid-column:1/-1}
label{font-size:.82rem;color:var(--muted);display:block;margin-bottom:6px;font-family:var(--font-mono);text-transform:uppercase;letter-spacing:.06em}
input,select,textarea{width:100%;padding:13px 16px;border:1px solid var(--line);border-radius:12px;background:var(--surface);color:var(--ink);font:inherit}
input:focus,select:focus,textarea:focus{outline:2px solid var(--orange);outline-offset:1px}
.book{display:grid;grid-template-columns:1fr 1.2fr;gap:48px;align-items:start}
footer{padding:40px 0;color:var(--muted);font-size:.92rem;border-top:1px solid var(--line)}
footer .wrap{display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px}
@media(max-width:820px){.book{grid-template-columns:1fr}form{grid-template-columns:1fr}section{padding:56px 0}}
</style>
</head>
<body>
<div class="site-shell">
@include('partials.navbar')
<main>
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
    <details><summary>Do you track my flight?</summary><p>Yes. If your flight lands early or late, your driver adjusts the pickup time automatically.</p></details>
    <details><summary>How early should I book?</summary><p>We recommend at least 24 hours ahead. Last-minute requests are accepted subject to availability.</p></details>
    <details><summary>Are tolls and parking included?</summary><p>We state clearly in your quote what is included, so there are no surprises on the day.</p></details>
    <details><summary>Can I add stops or change my booking?</summary><p>Yes. Message us on WhatsApp and we'll update your booking.</p></details>
    <details><summary>Can I pair this with a tour package?</summary><p>Absolutely. Airport transfers can be added to any Akash Tourism itinerary.</p></details>
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