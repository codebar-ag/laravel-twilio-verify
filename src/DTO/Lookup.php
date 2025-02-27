<?php

namespace CodebarAg\TwilioVerify\DTO;

use Illuminate\Support\Arr;

/**
 * @phpstan-consistent-constructor
 */
class Lookup
{
    public static function fromJson(array $lookup): ?self
    {
        if (Arr::get($lookup, 'carrier') === null) {
            return null;
        }

        return new static(
            carrier: Carrier::fromJson(Arr::get($lookup, 'carrier')),
        );
    }

    public function __construct(public Carrier $carrier) {}

    public static function fake(?Carrier $carrier = null): self
    {
        return new static(
            carrier: $carrier ?? Carrier::fake(),
        );
    }
}
