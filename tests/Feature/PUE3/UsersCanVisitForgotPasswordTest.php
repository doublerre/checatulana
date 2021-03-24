<?php

namespace Tests\Feature\PUE3;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersCanVisitForgotPassword extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanVisitForgotPassword()
    {
        $response = $this->get('password/reset');

        $response->assertStatus(200);
    }
}
