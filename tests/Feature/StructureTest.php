<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StructureTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_welcome_view_has_correct_html_structure(): void
    {
        $contents = $this->view('welcome');

        $contents->assertSee('head');

        $contents->assertSee('body');

        $contents->assertSee('header');

        $contents->assertSee('main');

        $contents->assertSee('footer');
    }
}
