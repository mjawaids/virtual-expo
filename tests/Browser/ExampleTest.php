<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends DuskTestCase
{
    use DatabaseTransactions;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Virtual Expo');
        });
    }

    // public function testLogin()
    // {
    //     $user = factory(User::class)->create([
    //         'email' => 'jawaid@gmail.com',
    //         'password' => bcrypt('secret'),
    //     ]);

    //     $this->browse(function ($browser) use ($user) {
    //         $browser->visit('/login')
    //                 ->type('email', $user->email)
    //                 ->type('password', 'secret')
    //                 ->press('Login')
    //                 ->assertPathIs('/home');
    //     });
    // }
}
