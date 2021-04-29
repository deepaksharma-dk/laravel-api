<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAutoCompleteWithResult()
    {
        $response = $this->get('http://127.0.0.1:8000/api/autocomplete?term=aut');
        $response->assertStatus(200);
        $response->assertJsonStructure([['id', 'title', 'sku', 'created_at', 'updated_at']]);
    }

    public function testAutoCompleteWithoutResult()
    {
        $response = $this->get('http://127.0.0.1:8000/api/autocomplete?term=au');
        $response->assertStatus(200);
        $response->assertJsonStructure([]);
    }
}
