<?php
namespace Eleme\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Guzzle extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'guzzle';
    }
}
