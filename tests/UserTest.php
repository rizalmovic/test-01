<?php

use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function testRegisterPage()
    {
        $this->visit('register')->see('daftar');
    }

    public function testRegister()
    {
        $user = factory(App\Models\User::class)->create();
        $this->seeInDatabase('users', ['email' => $user->email]);
    }
}
