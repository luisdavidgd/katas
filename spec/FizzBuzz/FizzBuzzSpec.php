<?php

namespace spec\FizzBuzz;

use FizzBuzz\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }
}
