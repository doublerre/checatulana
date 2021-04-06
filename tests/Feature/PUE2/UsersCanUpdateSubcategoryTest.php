<?php

namespace Tests\Feature\PUE2;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UsersCanUpdateSubcategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanUpdateSubcategoryTest()
    {
        $id = 5;
        $user = User::find(1);
        $response = $this->actingAs($user)
                ->withSession(['foo' => 'bar'])
                ->put('subcategories/'. $id, [
                    'name' => 'Unit test',
                    'slug' => 'unit/test',
                    'body' => 'Unit Test 1',
                    'category_id' => 3,
                ])
                ->assertRedirect('subcategories/'.$id.'/edit');
    }
}
