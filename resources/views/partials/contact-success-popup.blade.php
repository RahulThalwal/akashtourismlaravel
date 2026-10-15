@if (session('contact_status'))
    <div class="contact-success-popup" data-contact-success-popup role="dialog" aria-modal="true"
        aria-labelledby="contact-success-title">
        <div class="contact-success-popup-panel">
            <button class="contact-success-popup-close" type="button" aria-label="Close confirmation">&times;</button>
            <p class="eyebrow dark"><span></span> Message received</p>
            <h2 id="contact-success-title">Thank you for<br><em>getting in touch.</em></h2>
            <p>{{ session('contact_status') }}</p>
            <button class="primary-button contact-success-popup-dismiss" type="button">Continue exploring</button>
        </div>
    </div>
@endif
