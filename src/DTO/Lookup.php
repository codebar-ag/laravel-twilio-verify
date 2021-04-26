<?php

namespace CodebarAg\TwilioVerify\DTO;

class Lookup
{
    public static function fromJson(array $lookup): self
    {
        return new static(
            carrier: Carrier::fromJson($lookup['carrier']),
        );
    }

    public function __construct(public Carrier $carrier)
    {
    }

    public static function fake(?Carrier $carrier = null): self
    {
        return new static(
            carrier: $carrier ?? Carrier::fake(),
        );
    }
}
