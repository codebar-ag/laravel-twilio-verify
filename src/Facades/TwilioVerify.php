<?php

namespace CodebarAg\TwilioVerify\Facades;

use CodebarAg\TwilioVerify\DTO\VerificationCheck;
use CodebarAg\TwilioVerify\DTO\VerificationStart;
use Illuminate\Support\Facades\Facade;

/**
 * @method static VerificationStart start(string $to)
 * @method static VerificationCheck check(string $to, string $code)
 *
 * @see \CodebarAg\TwilioVerify\TwilioVerify
 */
class TwilioVerify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CodebarAg\TwilioVerify\TwilioVerify::class;
    }
}
