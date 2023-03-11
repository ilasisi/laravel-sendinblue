<?php

namespace Ilasisi\SendInBlue\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ilasisi\SendInBlue\SendInBlue
 */
class SendInBlue extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ilasisi\SendInBlue\SendInBlue::class;
    }
}
