<?php

namespace spec\DecodeTheMorseCode;

use DecodeTheMorseCode\DecodeMorse;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DecodeMorseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->decode_morse('...')->shouldReturn("S");
        $this->decode_morse('.... . -.--   .--- ..- -.. .')->shouldReturn("HEY JUDE");
    }
}
