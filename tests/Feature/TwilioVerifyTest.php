<?php

namespace CodebarAg\TwilioVerify\Tests\Feature;

use CodebarAg\TwilioVerify\DTO\VerificationCheck;
use CodebarAg\TwilioVerify\DTO\VerificationStart;
use CodebarAg\TwilioVerify\Events\TwilioVerifyResponseLog;
use CodebarAg\TwilioVerify\Tests\TestCase;
use CodebarAg\TwilioVerify\TwilioVerify;
use Illuminate\Support\Facades\Event;

class TwilioVerifyTest extends TestCase
{
    /** @test */
    public function it_does_start_a_verification_with_sms()
    {
        $this->markTestSkipped();
        Event::fake();
        $phoneNumber = '+12085059915';

        $verification = (new TwilioVerify)->start(to: $phoneNumber);

        $this->assertInstanceOf(VerificationStart::class, $verification);
        $this->assertSame($phoneNumber, $verification->to);
        $this->assertSame('pending', $verification->status);
        $this->assertFalse($verification->valid);
        $this->assertSame(config('twilio_verify.service_sid'), $verification->service_sid);
        $this->assertSame(config('twilio_verify.account_sid'), $verification->account_sid);
        Event::assertDispatchedTimes(TwilioVerifyResponseLog::class);
    }

    /** @test */
    public function it_does_check_a_verification_with_sms()
    {
        $this->markTestSkipped();
        Event::fake();
        $code = '4804';
        $phoneNumber = '+12085059915';

        $verification = (new TwilioVerify)->check(
            to: $phoneNumber,
            code: $code,
        );

        $this->assertInstanceOf(VerificationCheck::class, $verification);
        $this->assertSame($phoneNumber, $verification->to);
        $this->assertSame('approved', $verification->status);
        $this->assertTrue($verification->valid);
        $this->assertSame(config('twilio_verify.service_sid'), $verification->service_sid);
        $this->assertSame(config('twilio_verify.account_sid'), $verification->account_sid);
        Event::assertDispatchedTimes(TwilioVerifyResponseLog::class);
    }
}
