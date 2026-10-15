<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactSubmissionTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config(['mail.default' => 'array']);
    }

    public function test_contact_page_shows_success_popup_after_submission(): void
    {
        $this->from('/contact')
            ->post(route('contact.submit'), [
                'name' => 'Avery Guest',
                'email' => 'avery@example.com',
                'message' => 'I would like to plan a trip.',
            ])
            ->assertRedirect('/contact')
            ->assertSessionHas('contact_status');

        $this->get('/contact')
            ->assertOk()
            ->assertSee('data-contact-success-popup')
            ->assertSee('Thank you for')
            ->assertSee('Your enquiry has been sent.');
    }

    public function test_homepage_shows_success_popup_after_submission(): void
    {
        $this->from('/')
            ->post(route('contact.submit'), [
                'name' => 'Avery Guest',
                'email' => 'avery@example.com',
                'message' => 'I would like to plan a trip.',
            ])
            ->assertRedirect('/')
            ->assertSessionHas('contact_status');

        $this->get('/')
            ->assertOk()
            ->assertSee('data-contact-success-popup')
            ->assertSee('Thank you for')
            ->assertSee('Your enquiry has been sent.');
    }
}
