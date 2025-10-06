<?php
namespace Tests\Unit\Infrastructure;
use App\Infrastructure\Adapters\UserAdapter;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdaptersTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_adapter_transforms_data_correctly()
    {
        $user = User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);

        $adapter = new UserAdapter($user);
        $transformed = $adapter->transform();

        $this->assertEquals([
            'full_name' => 'Jane Doe',
            'email_address' => 'jane@example.com',
        ], $transformed);
    }
}
