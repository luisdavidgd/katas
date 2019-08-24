<?php

namespace spec\CenturyFromYear;

use CenturyFromYear\CenturyFromYear;
use PhpSpec\ObjectBehavior;

class CenturyFromYearSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->centuryFromYear(1705)->shouldReturn(18);
        $this->centuryFromYear(1900)->shouldReturn(19);
        $this->centuryFromYear(1601)->shouldReturn(17);
        $this->centuryFromYear(2000)->shouldReturn(20);
        $this->centuryFromYear(2019)->shouldReturn(21);
    }
}
