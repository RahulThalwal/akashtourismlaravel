<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">@include('partials.seo', [
        'seoTitle' => 'Privacy Policy | Akash Tourism',
        'seoDescription' =>
            'Read the Akash Tourism privacy policy to understand how we collect, use, and protect your information.',
        'seoType' => 'website',
        'seoSchema' => [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => 'Privacy Policy | Akash Tourism',
            'description' => 'Privacy and data handling information for Akash Tourism.',
        ],
    ])@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="legal-page">
    <div class="site-shell">
        <header class="site-header"><a class="brand" href="#top" aria-label="Akash Tourism home">
                <img src="{{ asset('images/icon.png') }}" alt="Akash Tourism" class="brand-mark">
                <span>Akash Tourism</span>
            </a>
            <nav class="desktop-nav" aria-label="Primary navigation"><a href="{{ url('/#destinations') }}">Explore</a><a
                    href="{{ route('services') }}">Services</a><a href="{{ route('blog.index') }}">Blog</a>
                    <a href="{{ route('about') }}">About us</a>
                    <a class="active" href="{{ route('privacy') }}">Privacy</a>
            </nav>
            <div class="header-actions"><button class="icon-button" type="button" aria-label="Search"
                    data-search-trigger><svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="11" cy="11" r="6.5"></circle>
                        <path d="m16 16 5 5"></path>
                    </svg></button><a class="saved-link" href="{{ url('/#saved') }}">Saved <span>0</span></a><button
                    class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav"
                    aria-label="Toggle menu"><span></span><span></span></button></div>
        </header>
        <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation"><a
                href="{{ url('/#destinations') }}">Explore</a><a href="{{ route('services') }}">Services</a><a
                href="{{ route('blog.index') }}">Blog</a><a href="{{ route('about') }}">About us</a><a class="active"
                href="{{ route('privacy') }}">Privacy</a></nav>
        <main class="legal-content">
            <p class="eyebrow dark"><span></span> Akash Tourism / Legal</p>
            <h1>Privacy<br><em>policy.</em></h1>
            <p class="legal-updated">Last updated: 15 September 2026</p>
            <div class="legal-intro">We respect the trust you place in us. This policy explains what information Akash
                Tourism collects, why we collect it, and the choices you have.</div>
            <div class="legal-sections">
                <section><span>01</span>
                    <div>
                        <h2>Information we collect</h2>
                        <p>When you contact us, request a journey, or subscribe to updates, we may collect your name,
                            email address, phone number, travel preferences, and the details you choose to share.</p>
                    </div>
                </section>
                <section><span>02</span>
                    <div>
                        <h2>How we use it</h2>
                        <p>We use your information to respond to enquiries, design and manage trips, improve our
                            website, and send relevant updates when you have asked to receive them. We do not sell your
                            personal information.</p>
                    </div>
                </section>
                <section><span>03</span>
                    <div>
                        <h2>Sharing information</h2>
                        <p>We only share the information needed to arrange your trip with trusted partners such as
                            accommodation providers, local guides, and transport teams.</p>
                    </div>
                </section>
                <section><span>04</span>
                    <div>
                        <h2>Your choices</h2>
                        <p>You can ask us to access, correct, or delete the personal information we hold about you. You
                            can also unsubscribe from marketing messages at any time.</p>
                    </div>
                </section>
                <section><span>05</span>
                    <div>
                        <h2>Contact us</h2>
                        <p>Questions about this policy? Email <a
                                href="mailto:hello@akashtourism.in">hello@akashtourism.in</a>.</p>
                    </div>
                </section>
            </div>
        </main>
        <footer class="site-footer">
            <div class="footer-brand">
                <div class="brand"><span class="brand-mark">A</span><span>Akash Tourism</span></div>
                <p>Made for the curious.</p>
            </div>
            <div class="footer-links">
                <div><strong>Site</strong><a href="{{ route('about') }}">About us</a><a
                        href="{{ route('services') }}">Services</a><a href="{{ route('blog.index') }}">Blog</a><a
                        href="{{ route('privacy') }}">Privacy policy</a></div>
                <div><strong>Destinations</strong><a href="{{ route('destinations.show', 'delhi') }}">Delhi</a><a
                        href="{{ route('destinations.show', 'agra') }}">Agra</a><a
                        href="{{ route('destinations.show', 'jammu-kashmir') }}">Jammu & Kashmir</a><a
                        href="{{ route('destinations.show', 'himachal-pradesh') }}">Himachal Pradesh</a></div>
            </div><span>© 2024 Akash Tourism India</span>
        </footer>
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
