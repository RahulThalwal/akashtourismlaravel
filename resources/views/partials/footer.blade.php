<footer class="site-footer" id="about">
    <div class="footer-main">
        <div class="footer-brand">
            <a class="brand" href="{{ url('/') }}" aria-label="Akash Tourism home">
                <img src="{{ asset('images/icon.png') }}" alt="" class="brand-mark">
                <span>Akash Tourism</span>
            </a>
            <p class="footer-tagline">Thoughtful journeys, local stories, and room to discover India at your own pace.</p>
            <a class="footer-cta" href="{{ route('contact') }}">Plan your journey <span aria-hidden="true">↗</span></a>
            <div class="footer-platforms">
                <strong>Travel platforms</strong>
                <div class="footer-platform-logos">
                    <span>
                        <img src="{{ asset('images/travel-platforms/tripadvisor.svg') }}" alt="">
                        Tripadvisor
                    </span>
                    <span>
                        <span class="footer-platform-wordmark">GetYourGuide</span>
                    </span>
                    <span>
                        <img src="{{ asset('images/travel-platforms/klook.svg') }}" alt="">
                        Klook
                    </span>
                    <span>
                        <img src="{{ asset('images/travel-platforms/airbnb.svg') }}" alt="">
                        Airbnb
                    </span>
                </div>
            </div>
        </div>

        <nav class="footer-links" aria-label="Explore Akash Tourism">
            <strong>Explore</strong>
            <a href="{{ route('services') }}">Our services</a>
            <a href="{{ route('airport-pickup-drop-service') }}">Airport pickup &amp; drop</a>
            <a href="{{ route('blog.index') }}">Travel journal</a>
            <a href="{{ route('about') }}">About us</a>
            <a href="{{ route('privacy') }}">Privacy policy</a>
        </nav>

        <nav class="footer-links" aria-label="Destinations">
            <strong>Destinations</strong>
            <a href="{{ route('destinations.show', 'delhi') }}">Delhi</a>
            <a href="{{ route('destinations.show', 'agra') }}">Agra</a>
            <a href="{{ route('destinations.show', 'jammu-kashmir') }}">Jammu &amp; Kashmir</a>
            <a href="{{ route('destinations.show', 'himachal-pradesh') }}">Himachal Pradesh</a>
            <a href="{{ route('destinations.rajasthan') }}">Rajasthan</a>
        </nav>

        <div class="footer-contact">
            <strong>Get in touch</strong>
            <a href="mailto:info@akashjourney.com">info@akashjourney.com</a>
            <a href="tel:+919459232875">+91 94592 32875</a>
            <span>Here to help plan your next journey.</span>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© {{ now()->year }} Akash Tourism India</span>
        <span>Made for the curious.</span>
    </div>
    <button class="enquiry-tab" type="button" data-enquiry-trigger aria-haspopup="dialog">
        <span>Enquire Now</span>
    </button>
</footer>
<a class="whatsapp-float" href="https://wa.me/919459232875" target="_blank" rel="noopener noreferrer"
    aria-label="Chat with Akash Tourism on WhatsApp" title="Chat with us on WhatsApp">
    <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M12.04 2a9.88 9.88 0 0 0-8.47 14.97L2.2 22l5.16-1.35A9.96 9.96 0 1 0 12.04 2Zm0 18.1a8.16 8.16 0 0 1-4.16-1.14l-.3-.18-3.06.8.82-2.98-.2-.31A8.12 8.12 0 1 1 12.04 20.1Zm4.46-6.09c-.24-.12-1.42-.7-1.64-.78-.22-.08-.38-.12-.54.12-.16.24-.62.78-.76.94-.14.16-.28.18-.52.06-.24-.12-1.02-.38-1.94-1.2-.72-.64-1.2-1.43-1.34-1.67-.14-.24-.02-.37.1-.49.11-.1.24-.27.36-.4.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.54-1.3-.74-1.78-.2-.46-.4-.4-.54-.41h-.46c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.69 2.58 4.1 3.62.58.25 1.03.4 1.39.51.58.18 1.1.16 1.52.1.46-.07 1.42-.58 1.62-1.14.2-.56.2-1.04.14-1.14-.06-.1-.22-.16-.46-.28Z" />
    </svg>
</a>
