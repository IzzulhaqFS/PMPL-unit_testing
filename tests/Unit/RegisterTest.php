<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_register_page()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
}