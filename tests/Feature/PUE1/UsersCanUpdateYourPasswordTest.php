<?php

namespace Tests\Feature\PUE1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UsersCanUpdateYourPasswordTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanUpdateYourPasswordTest()
    {
        $user = User::find(1);
        $response = $this->actingAs($user)
                ->withSession(['foo' => 'bar'])
                ->put('profile/change_password', [
                    'old_password' => '12345678',
                    'password' => '1234567890',
                    'password_confirmation' => '1234567890',
                ])
                ->assertRedirect('');
    }
}
