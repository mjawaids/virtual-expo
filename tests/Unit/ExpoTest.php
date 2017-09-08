<?php

namespace Tests\Unit;

use App\User;
use App\Stand;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Generator as Faker;

class ExpoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testReservationWithoutLogin()
    {
        $response = $this->get('/reservation/1');
        $response->assertRedirect('/login');
    }

    public function testReservationWithLogin()
    {
        $user = factory(User::class)->create();

        // NOTE: Assuming there is already seeded data inserted into database 
        //      otherwise test will fail
        $response = $this->actingAs($user)
                            ->get('/reservation/1');

        $response->assertViewIs( 'reservation' );
    }

    public function testHomeWithoutLogin()
    {
        $response = $this->get('/home');
        $response->assertRedirect('/login');
    }

    public function testHomeWithLogin()
    {
        $user = factory(User::class)->create();

        // NOTE: Assuming there is already seeded data inserted into database 
        //      otherwise test will fail.
        //          Other approach is to use fake data or mock it.
        $response = $this->actingAs($user)
                            ->get('/home');

        $response->assertViewIs( 'home' );
    }

    public function testUpcomingEvents()
    {
        // NOTE: Assuming there is already seeded data inserted into database 
        //      otherwise test will fail.
        //          Other approach is to use fake data or mock it.
        
        $response = $this->json('GET', '/events');
        
        $response
            ->assertStatus(200)
            ->assertJson([
                ['name' => 'IT Expo']
            ]);
    }

    public function testCurrentEvents()
    {
        // NOTE: Assuming there is already seeded data inserted into database 
        //      otherwise test will fail.
        //          Other approach is to use fake data or mock it.
        
        $response = $this->json('GET', '/events/current');
        
        $response
            ->assertStatus(200)
            ->assertJson([
                ['name' => 'Electrical Seminar']
            ]);
    }

    public function testPastEvents()
    {
        // NOTE: Assuming there is already seeded data inserted into database 
        //      otherwise test will fail.
        //          Other approach is to use fake data or mock it.
        
        $response = $this->json('GET', '/events/expired');
        
        $response
            ->assertStatus(200)
            ->assertJson([
                ['name' => 'Fashion Show']
            ]);
    }

    public function testStands()
    {
        // NOTE: Assuming there is already seeded data inserted into database 
        //      otherwise test will fail.
        //          Other approach is to use fake data or mock it.
        
        $response = $this->json('GET', '/events/1');
        
        $response
            ->assertStatus(200)
            ->assertJson([
                ['name' => 'Stand Alpha']
            ]);
    }
}
