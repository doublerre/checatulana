<?php

namespace Tests\Feature\PUE2;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UsersCanVisitEditCategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanVisitEditCategoryTest()
    {
        $user = User::find(1);
        $id = 5;
        $response = $this->actingAs($user)
                ->withSession(['foo' => 'bar'])
                ->get('categories/'.$id);

        $response->assertStatus(200);
    }
}
