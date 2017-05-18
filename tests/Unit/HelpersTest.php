<?php

namespace Tests\Unit;

use App\Department;
use App\DepartmentData;
use Tests\CreatesApplication;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelpersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use DepartmentData;

    public function testDisplayFiltersAppliesSelectedAttributeCorrectly()
    {
        $departments = [];

        foreach ($this->departments as $key => $value) {

            $departments[] = factory(Department::class)->make([
                'name' => $value['name'],
                'url' => $value['url'],
                'id' => count($departments) + 1
            ]);
        }

        $filters_html = display_filters(4, $departments);

        // check the full option tag is formed as expected - returns 1 if a match is made
        $was_found = preg_match('/<option value="4" selected="selected">[^<]*<\/option>/', $filters_html);

        // check the number of times the selected attribute appears (we only want one option to be selected)
        $number_found = preg_match_all('/selected="selected"/', $filters_html);

        $this->assertTrue($was_found === 1);
        $this->assertEquals($number_found, 1);
    }
}
