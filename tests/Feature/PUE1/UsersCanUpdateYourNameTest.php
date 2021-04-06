<?php

namespace Tests\Feature\PUE1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UsersCanUpdateYourNameTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanUpdateYourNameTest()
    {
        $user = User::find(1);
        $response = $this->actingAs($user)
                ->withSession(['foo' => 'bar'])
                ->put('profile/'.$user->id .'/update', [
                    'name' => 'Fulanito Perez',
                ])
                ->assertRedirect('profile');
    }
}
