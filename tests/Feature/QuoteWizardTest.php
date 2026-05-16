<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteMail;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class QuoteWizardTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function test_quote_wizard_submission()
    {
        Mail::fake();

        $data = [
            'full_name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'property_type' => 'Office',
            'service_type' => 'Commercial Janitorial',
            'location' => 'Toronto',
            'other_city' => null,
            'condition' => 'Standard Wear',
            'preferred_date' => now()->addDays(7)->format('Y-m-d'),
            'message' => 'Test message',
            'project_size' => 'Small',
            'website_hp' => '', // Honeypot
        ];

        $response = $this->postJson(route('quote.store'), $data);

        $response->assertStatus(200)
                 ->assertJson(['success' => true]);

        $this->assertDatabaseHas('quotes', [
            'full_name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        Mail::assertSent(QuoteMail::class, function ($mail) {
            return $mail->hasTo('info@pristoviaservices.com');
        });
    }

    public function test_quote_wizard_honeypot_failure()
    {
        $data = [
            'full_name' => 'Spam Bot',
            'email' => 'spam@bot.com',
            'phone' => '0000000000',
            'property_type' => 'Office',
            'service_type' => 'Commercial Janitorial',
            'location' => 'Toronto',
            'other_city' => null,
            'condition' => 'New',
            'preferred_date' => now()->addDays(7)->format('Y-m-d'),
            'website_hp' => 'I am a bot', // Filled honeypot
        ];

        $response = $this->postJson(route('quote.store'), $data);

        $response->assertStatus(422);
        $this->assertDatabaseCount('quotes', 0);
    }
}
