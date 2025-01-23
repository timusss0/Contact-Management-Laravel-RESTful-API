<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testRegisterSuccess(){
        $this->post('/api/user',[
            "username" => "tia",
            "password" => "rahasia",
            "name" => "Tia Mustika"
        ])
        ->assertStatus(201)
        ->assertJson([
            "data"=>[
                "username" => "tia",
                "name" => "Tia Mustika"
            ]
        ]);
    }
    public function testRegisterFailed(){

    }
    public function testRegisterUsernameAlreadyExists(){

    }
}
