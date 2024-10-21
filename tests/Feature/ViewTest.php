<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_welcome_view_has_correct_content(): void
    {
        $contents = $this->view('welcome');

        $contents->assertSee('Laracasts');

        $contents->assertSee('Laravel News');

        $contents->assertSee('Vibrant Ecosystem');
    }
}
