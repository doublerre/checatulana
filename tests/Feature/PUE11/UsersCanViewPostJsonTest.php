<?php

namespace Tests\Feature\PUE11;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
class UsersCanViewPostJsonTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanViewPostJsonTest()
    {
        $id = 2;
        $user = User::find(1);
        $response = $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->getJson('profile/posts');
            
        $response->assertStatus(200);
    }
}