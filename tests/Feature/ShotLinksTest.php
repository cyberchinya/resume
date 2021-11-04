<?php

namespace Tests\Feature;

use http\Env\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShotLinksTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_form_link_generate()
    {
        $response = $this->get('/links');

        $response->assertStatus(200);
    }
    public function test_send_form_link_generate()
    {
       $url = "https://google.com";
       $response = $this->post('/links', ['url'=>$url]);

       $response->assertStatus(201);
    }
}
