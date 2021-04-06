<?php

namespace Tests\Feature\PUA4;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UsersCanUpdateRoleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanUpdateRoleTest()
    {
        $id = 2;
        $user = User::find(1);
        $response = $this->actingAs($user)
                ->withSession(['foo' => 'bar'])
                ->put('admin/'. $id .'/change_role')
                ->assertRedirect('');
    }
}
