<?php

namespace Meteor\Country\Facades;

use Illuminate\Support\Facades\Facade;

class Negara extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'negara';
    }
}
