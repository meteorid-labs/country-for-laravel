<?php

namespace Meteor\Country\Tests\Feature;

use Meteor\Country\Facades\Negara;
use Meteor\Country\Tests\TestCase;

class ImportCommandTest extends TestCase
{
    public function test_import_command_can_run()
    {
        $this->artisan('negara:import')->assertSuccessful();

        $this->assertDatabaseHas(Negara::country(), [
            'name' => 'Indonesia',
        ]);
    }
}
