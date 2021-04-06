<?php

namespace Tests\Feature\PUE3;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersCanUpdateYourPasswordForEmailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanUpdateYourPasswordForEmailTest()
    {
        $token = '60ffa37f529456887bc67632304fa49edc74255666d005044d75a8ee7b40b480';

        $response = $this->post('password/reset', [
            'token' => $token,
            'email' => '481700307@alumnos.utzac.edu.mx',
            'password' => 'utzac1234',
            'password_confirmation' => 'utzac1234',
        ])
        ->assertRedirect('dashboard/blogs');

    }
}
