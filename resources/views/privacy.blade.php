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
              @include('partials.navbar')
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
                                href="mailto:info@akashjourney.com">info@akashjourney.com</a>.</p>
                    </div>
                </section>
            </div>
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
