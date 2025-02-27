<?php

namespace CodebarAg\TwilioVerify\DTO;

use Illuminate\Support\Arr;

/**
 * @phpstan-consistent-constructor
 */
class Carrier
{
    public static function fromJson(array $data): self
    {
        return new static(
            error_code: Arr::get($data, 'error_code'),
            name: Arr::get($data, 'name'),
            mobile_country_code: Arr::get($data, 'mobile_country_code'),
            mobile_network_code: Arr::get($data, 'mobile_network_code'),
            type: Arr::get($data, 'type'),
        );
    }

    public function __construct(
        public ?string $error_code,
        public string $name,
        public string $mobile_country_code,
        public string $mobile_network_code,
        public string $type,
    ) {}

    public static function fake(
        ?string $error_code = null,
        ?string $name = null,
        ?string $mobile_country_code = null,
        ?string $mobile_network_code = null,
        ?string $type = null,
    ): self {
        return new static(
            error_code: $error_code ?? null,
            name: $name ?? 'Carrier Name',
            mobile_country_code: $mobile_country_code ?? '310',
            mobile_network_code: $mobile_network_code ?? '150',
            type: $type ?? '150',
        );
    }
}
