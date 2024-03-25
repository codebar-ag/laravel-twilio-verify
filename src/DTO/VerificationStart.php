<?php

namespace CodebarAg\TwilioVerify\DTO;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * @property Collection|SendCodeAttempt[] $send_code_attempts
 */
class VerificationStart
{
    public static function fromJson(array $data): self
    {
        return new static(
            sid: Arr::get($data, 'sid'),
            service_sid: Arr::get($data, 'service_sid'),
            account_sid: Arr::get($data, 'account_sid'),
            to: Arr::get($data, 'to'),
            channel: Arr::get($data, 'channel'),
            status: Arr::get($data, 'status'),
            valid: Arr::get($data, 'valid'),
            created_at: Carbon::parse(Arr::get($data, 'date_created')),
            updated_at: Carbon::parse(Arr::get($data, 'date_updated')),
            lookup: Lookup::fromJson(Arr::get($data, 'lookup')),
            send_code_attempts: SendCodeAttempt::fromJson(Arr::get($data, 'send_code_attempts')),
            url: Arr::get($data, 'url'),
        );
    }

    public function __construct(
        public string $sid,
        public string $service_sid,
        public string $account_sid,
        public string $to,
        public string $channel,
        public string $status,
        public bool $valid,
        public Carbon $created_at,
        public Carbon $updated_at,
        public ?Lookup $lookup,
        public Collection $send_code_attempts,
        public string $url,
    ) {
    }

    public static function fake(
        ?string $sid = null,
        ?string $service_sid = null,
        ?string $account_sid = null,
        ?string $to = null,
        ?string $channel = null,
        ?string $status = null,
        ?bool $valid = null,
        ?string $created_at = null,
        ?string $updated_at = null,
        ?Lookup $lookup = null,
        ?Collection $send_code_attempts = null,
        ?string $url = null,
    ): self {
        $service = 'VA' . Str::random(32);

        return new static(
            sid: $sid ?? 'VE' . Str::random(32),
            service_sid: $service_sid ?? $service,
            account_sid: $account_sid ?? 'AC' . Str::random(32),
            to: $to ?? '+41795555825',
            channel: $channel ?? 'sms',
            status: $status ?? 'pending',
            valid: $valid ?? false,
            created_at: $created_at ?? now(),
            updated_at: $updated_at ?? now(),
            lookup: $lookup ?? Lookup::fake(),
            send_code_attempts: $send_code_attempts ?? collect([SendCodeAttempt::fake()]),
            url: $url ?? "https://verify.twilio.com/v2/Services/{$service}/Verifications",
        );
    }
}
