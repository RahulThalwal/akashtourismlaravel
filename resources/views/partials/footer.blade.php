 <footer class="site-footer" id="about">
     <div class="footer-brand">
         <div class="brand"><img src="{{ asset('images/icon.png') }}" alt="Akash Tourism" class="brand-mark"><span>Akash
                 Tourism</span></div>
         <p>Made for the curious.</p>
     </div>
     <div class="footer-links">
         <div><strong>Site</strong><a href="{{ route('about') }}">About us</a><a
                 href="{{ route('services') }}">Services</a><a href="{{ route('blog.index') }}">Blog</a><a
                 href="{{ route('privacy') }}">Privacy policy</a></div>
         <div><strong>Destinations</strong><a href="{{ route('destinations.show', 'delhi') }}">Delhi</a><a
                 href="{{ route('destinations.show', 'agra') }}">Agra</a><a
                 href="{{ route('destinations.show', 'jammu-kashmir') }}">Jammu & Kashmir</a>
             <a href="{{ route('destinations.show', 'himachal-pradesh') }}">Himachal Pradesh</a>
             <a href="{{ route('destinations.rajasthan') }}">Rajasthan</a>
         </div>
     </div><span>© 2024 Akash Tourism India</span>
 </footer>
