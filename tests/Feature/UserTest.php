<?php

namespace Tests\Feature;

use App\Enums\AccessRights;
use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @var int */
    private $userId;

    public function testIsAdmin(): void
    {
        $user = User::where('name', 'test_is_admin')->first();

        $this->assertTrue($user->isAdmin());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->userId = DB::table('users')->insertGetId(
            [
                'email' => str_random(10) . '@example.com',
                'name' => 'test_is_admin',
                'access_rights' => AccessRights::ADMIN_ACCESS_RIGHT,
                'password' => bcrypt('secret')
            ]
        );
    }

    protected function tearDown(): void
    {
        DB::table('users')->delete($this->userId);
    }
}
