<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo', [
        'seoTitle' => 'Contact Us | Akash Tourism',
        'seoDescription' =>
            'Talk to Akash Tourism about your next journey through Delhi, Agra, Jammu & Kashmir, or Himachal Pradesh.',
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'name' => 'Contact Akash Tourism',
            'description' => 'Plan your next journey with Akash Tourism.',
        ],
    ])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="contact-page">
    <div class="site-shell">

        <header class="site-header">
            <a class="brand" href="#top" aria-label="Akash Tourism home">
                <img src="{{ asset('images/icon.png') }}" alt="Akash Tourism" class="brand-mark">
                <span>Akash Tourism</span>
            </a>
            <nav class="desktop-nav" aria-label="Primary navigation">
                <a href="{{ url('/#destinations') }}">Explore</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('blog.index') }}">Blog</a>
                <a href="{{ route('about') }}">About us</a>
                <a href="{{ route('privacy') }}">Privacy</a>
                <a class="active" href="{{ route('contact') }}">Contact</a>
            </nav>
            <div class="header-actions">
                <button class="icon-button" type="button" aria-label="Search" data-search-trigger>
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="m16 16 5 5"></path>
                    </svg>
                </button>
                <a class="saved-link" href="{{ url('/#saved') }}">Saved <span>0</span></a>
                <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav"
                    aria-label="Toggle menu">
                    <span></span><span></span>
                </button>
            </div>
        </header>

        <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation">
            <a href="{{ url('/#destinations') }}">Explore</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('blog.index') }}">Blog</a>
            <a href="{{ route('about') }}">About us</a>
            <a href="{{ route('privacy') }}">Privacy</a>
            <a class="active" href="{{ route('contact') }}">Contact</a>
        </nav>

        <main>
            <section class="contact-hero">
                <div>
                    <p class="eyebrow dark"><span></span> Start a conversation</p>
                    <h1>Let&rsquo;s make<br><em>somewhere new.</em></h1>
                    <p>Tell us what you are dreaming about. A slow week in the hills, a food-filled city break, or
                        something you have not imagined yet.</p>
                    <div class="contact-details">
                        <a href="mailto:info@akashjourney.com"><span>Email</span>info@akashjourney.com</a>
                        <a href="tel:+919876543210"><span>Call</span>+91 94592 32875</a>
                    </div>
                </div>

                <div class="contact-card">
                    <p class="eyebrow"><span></span> Plan your journey</p>

                    @if (session('contact_status'))
                        <p class="contact-success">{{ session('contact_status') }}</p>
                    @endif

                    @if ($errors->any())
                        <p class="contact-error">Please check the form and try again.</p>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="post">
                        @csrf
                        <label for="contact-name">Your name</label>
                        <input id="contact-name" name="name" type="text" value="{{ old('name') }}"
                            placeholder="What should we call you?" required>

                        <label for="contact-email">Email address</label>
                        <input id="contact-email" name="email" type="email" value="{{ old('email') }}"
                            placeholder="you@example.com" required>

                        <label for="contact-message">Tell us a little</label>
                        <textarea id="contact-message" name="message" rows="4" placeholder="Where are you thinking of going?">{{ old('message') }}</textarea>

                        <button class="primary-button" type="submit">Send enquiry <span>&#8599;</span></button>
                    </form>
                </div>
            </section>

            <section class="contact-note">
                <p class="eyebrow dark"><span></span> Good to know</p>
                <h2>Human answers.<br><em>Usually within a day.</em></h2>
                <p>We read every message ourselves and will come back with a few thoughtful questions before suggesting
                    a route.</p>
            </section>
        </main>

        <footer class="site-footer">
            <div class="footer-brand">
                <div class="brand"><span class="brand-mark">A</span><span>Akash Tourism</span></div>
                <p>Made for the curious.</p>
            </div>
            <div class="footer-links">
                <div>
                    <strong>Site</strong>
                    <a href="{{ route('about') }}">About us</a>
                    <a href="{{ route('services') }}">Services</a>
                    <a href="{{ route('blog.index') }}">Blog</a>
                    <a href="{{ route('privacy') }}">Privacy policy</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
                <div>
                    <strong>Destinations</strong>
                    <a href="{{ route('destinations.show', 'delhi') }}">Delhi</a>
                    <a href="{{ route('destinations.show', 'agra') }}">Agra</a>
                    <a href="{{ route('destinations.show', 'jammu-kashmir') }}">Jammu & Kashmir</a>
                    <a href="{{ route('destinations.show', 'himachal-pradesh') }}">Himachal Pradesh</a>
                </div>
            </div>
            <span>&copy; 2024 Akash Tourism India</span>
        </footer>
    </div>

    <div class="search-modal" role="dialog" aria-modal="true" aria-label="Search destinations" hidden>
        <div class="search-panel">
            <button class="modal-close" type="button" aria-label="Close search">&times;</button>
            <p class="eyebrow dark"><span></span> Find your next story</p>
            <h2>Where will you<br><em>wander?</em></h2>
            <form data-search-form>
                <label for="destination-search">Search a place</label>
                <div class="search-input">
                    <input id="destination-search" type="search" placeholder="Try 'mountains' or 'Agra'">
                    <button type="submit" aria-label="Submit search">&#8599;</button>
                </div>
                <p class="search-result" aria-live="polite"></p>
            </form>
        </div>
    </div>
</body>

</html>
