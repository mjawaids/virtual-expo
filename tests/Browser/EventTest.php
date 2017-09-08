<?php

namespace Tests\Browser;

use App\Stand;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EventTest extends DuskTestCase
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

    public function testUpcomingEvents()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Events');
        });
    }

    public function testCurrentEvents()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/current')
                    ->assertSee('Events')
                    ->assertSee('Visit Event');
        });
    }

    public function testPastEvents()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/expired')
                    ->assertSee('Events');
        });
    }

    public function testEventStands()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/event/1')
                    ->assertSee('Event Stands');
        });
    }

    public function testStandDetail()
    {
        // NOTE: Assuming there is already Stand data seeing into database
        //          otherwise test will fail. 
        //          Other approach is to use fake data or mock it. 
        $this->browse(function (Browser $browser) {
            $stand = Stand::where('company_id', '!=', 0)->first();
            $browser->visit('/stand/'.$stand->id)
                    ->assertSee('Stand');
        });
    }
}
