<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DepartmentSelectionTest extends DuskTestCase
{

    private $homeURL = 'http://rtr.app:8000/';

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testTheHeadingIsPresent()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit($this->homeURL)
                ->assertSee('Record transfer report');
        });
    }

    public function testNavigationToVisualisation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit($this->homeURL)
                ->clickLink('Visual display')
                ->assertSee('Choose department');
        });
    }

    public function testHomeOfficeData()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit($this->homeURL)
                ->pause(500)
                ->clickLink('Visual display')
                ->select('department', '2')
                ->pause(2000)
                ->assertSee('16,208');
        });
    }



}
