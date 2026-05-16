<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebTest extends TestCase
{
    /**
     * Test homepage loading.
     */
    public function test_homepage_loads_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Pristovia');
    }

    /**
     * Test language switching.
     */
    public function test_language_switching_works(): void
    {
        $response = $this->get('/?lang=fr');
        $response->assertStatus(200);
        $this->assertEquals('fr', app()->getLocale());
        
        $response = $this->get('/?lang=en');
        $response->assertStatus(200);
        $this->assertEquals('en', app()->getLocale());
    }
}
