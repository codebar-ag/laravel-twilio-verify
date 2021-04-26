<?php

namespace CodebarAg\TwilioVerify\Tests\Feature;

use CodebarAg\TwilioVerify\DTO\Carrier;
use CodebarAg\TwilioVerify\DTO\Lookup;
use CodebarAg\TwilioVerify\DTO\SendCodeAttempt;
use CodebarAg\TwilioVerify\DTO\VerificationCheck;
use CodebarAg\TwilioVerify\DTO\VerificationStart;
use CodebarAg\TwilioVerify\Tests\TestCase;

class DTOTest extends TestCase
{
    /** @test */
    public function it_does_create_a_fake_send_code_attempt()
    {
        $attempt = SendCodeAttempt::fake();

        $this->assertInstanceOf(SendCodeAttempt::class, $attempt);
    }

    /** @test */
    public function it_does_create_a_fake_lookup()
    {
        $lookup = Lookup::fake();

        $this->assertInstanceOf(Lookup::class, $lookup);
        $this->assertInstanceOf(Carrier::class, $lookup->carrier);
    }

    /** @test */
    public function it_does_create_a_fake_verification_start()
    {
        $verification = VerificationStart::fake();

        $this->assertInstanceOf(VerificationStart::class, $verification);
    }

    /** @test */
    public function it_does_create_a_fake_verification_check()
    {
        $verification = VerificationCheck::fake();

        $this->assertInstanceOf(VerificationCheck::class, $verification);
    }
}
