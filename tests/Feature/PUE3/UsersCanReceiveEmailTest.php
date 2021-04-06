<?php

namespace Tests\Feature\PUE3;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersCanReceiveEmailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanReceiveEmailTest()
    {
        $email = '481700307@alumnos.utzac.edu.mx';
        $response = $this->post('password/email', [
            'email' => $email,
        ])
        ->assertRedirect('');
    }
}
