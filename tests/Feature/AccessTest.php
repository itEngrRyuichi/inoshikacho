<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccessTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAccessHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response = $this->get('login');
        $response->assertStatus(200);
    }

    public function testAccessProfile(){
        $response = $this->get('profile');
        $response->assertStatus(200);
        $response = $this->get('profile/1');
        $response->assertStatus(302);
        $response = $this->get('profile/1/edit');
        $response->assertStatus(200);
    }

    public function testAccessReserve(){
        $response = $this->get('reserves');
        $response->assertStatus(200);
        $response = $this->get('reserves/create');
        $response->assertStatus(200);
        $response = $this->get('reserves/1');
        $response->assertStatus(200);
        $response = $this->get('reserves/1/edit');
        $response->assertStatus(200);
        $response = $this->get('stores/1/reserves');
        $response->assertStatus(200);
    }
    public function testAccessStores(){
        $response = $this->get("stores");
        $response->assertStatus(200);
        $response = $this->get('stores/create');
        $response->assertStatus(200);
    }
    public function testAccessComment(){
        $response = $this->get('stores/1/comments');
        $response->assertStatus(302);
        $response = $this->get('stores/1/comments/create');
        $response->assertStatus(200);
        $response = $this->get('stores/1/comments/1');
        $response->assertStatus(302);
    }
    public function testAccessPlan(){
        $response = $this->get('stores/1/plans');
        $response->assertStatus(302);
        $response = $this->get('stores/1/plans/create');
        $response->assertStatus(200);
        $response = $this->get('stores/1/plans/1');
        $response->assertStatus(302);
        $response = $this->get('stores/1/plans/1/edit');
        $response->assertStatus(200);
    }
    public function testAccessRoom(){
        $response = $this->get('stores/1/rooms');
        $response->assertStatus(302);
        $response = $this->get('stores/1/rooms/create');
        $response->assertStatus(200);
        $response = $this->get('stores/1/rooms/1');
        $response->assertStatus(302);
        $response = $this->get('stores/1/rooms/1/edit');
        $response->assertStatus(200);
        
    }
    public function testAccessStore(){
        $response = $this->get("stores/1");
        $response->assertStatus(200);
        $response = $this->get('stores/1/edit');
        $response->assertStatus(200);
    }
    public function testAccessUser(){
        $response = $this->get('users');
        $response->assertStatus(200);
        $response = $this->get('users/create');
        $response->assertStatus(200);
        $response = $this->get('users/1/reserves');
        $response->assertStatus(200);
        $response = $this->get('users/1/stores');
        $response->assertStatus(200);
        $response = $this->get('users/1');
        $response->assertStatus(302);
    }
}