<?php

namespace Tests\Feature\PS7;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UsersCanSendRequestEmptyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanSendRequestEmptyTest()
    {
        $id = 2;
        $user = User::find(1);
        $response = $this->actingAs($user)
                ->withSession(['foo' => 'bar'])
                ->post('categories', [
                    'name' => '',
                    'slug' => '',
                    'body' => '',
                    'logo_id' => '',
                ])
                ->assertSessionHasErrors();
    }
}
