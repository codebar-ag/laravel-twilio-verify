<?php

namespace CodebarAg\TwilioVerify\Facades;

use CodebarAg\TwilioVerify\TwilioVerify;
use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\TwilioVerify\TwilioVerify
 */
class TwilioVerifyFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return TwilioVerify::class;
    }
}
