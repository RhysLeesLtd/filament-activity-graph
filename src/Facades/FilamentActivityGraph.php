<?php

namespace RhysLeesLtd\FilamentActivityGraph\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RhysLeesLtd\FilamentActivityGraph\FilamentActivityGraph
 */
class FilamentActivityGraph extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RhysLeesLtd\FilamentActivityGraph\FilamentActivityGraph::class;
    }
}
