<?php

namespace Tests\Feature\PUE2;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UsersCanUpdateCategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanUpdateCategoryTest()
    {
        $id = 5;
        $user = User::find(1);
        $response = $this->actingAs($user)
                ->withSession(['foo' => 'bar'])
                ->put('categories/'. $id, [
                    'name' => 'Unit test',
                    'slug' => 'unit-test',
                    'body' => 'Unit Test 2.4',
                    'logo_id' => 10,
                ])
                ->assertRedirect('categories/'.$id);
    }
}
