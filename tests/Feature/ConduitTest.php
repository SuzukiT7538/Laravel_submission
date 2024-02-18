<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class ConduitTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // use DatabaseMigrations;
    public function testConduit(): void
    {
        $this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/editor');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);


    }
}
