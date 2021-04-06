<?php

namespace Tests\Feature\PUE2;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\User;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class UsersCanSaveBannerFileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function UsersCanSaveBannerFileTest()
    {
        $user = User::find(1);

        Storage::fake('images');
        $file = UploadedFile::fake()->image('image.jpg');

        $response = $this->actingAs($user)
                ->withSession(['foo' => 'bar'])
                ->post('banners/', [
                    'file' => $file,
                ]);

        $response->assertStatus(200);
    }
}
