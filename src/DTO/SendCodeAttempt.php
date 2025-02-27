<?php

namespace CodebarAg\TwilioVerify\DTO;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class SendCodeAttempt
{
    public static function fromJson(array $attempts): Collection
    {
        return collect($attempts)->map(function (array $attempt) {
            return new static(
                time: Carbon::parse(Arr::get($attempt, 'time')),
                channel: Arr::get($attempt, 'channel'),
                attempt_sid: Arr::get($attempt, 'attempt_sid'),
            );
        });
    }

    public function __construct(
        public Carbon $time,
        public string $channel,
        public string $attempt_sid,
    ) {}

    public static function fake(
        ?Carbon $time = null,
        ?string $channel = null,
        ?string $attempt_sid = null,
    ): self {
        return new static(
            time: $time ?? now(),
            channel: $channel ?? 'sms',
            attempt_sid: $attempt_sid ?? 'VL'.Str::random(32),
        );
    }
}
