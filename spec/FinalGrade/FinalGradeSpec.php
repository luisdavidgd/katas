<?php

namespace spec\FinalGrade;

use FinalGrade\FinalGrade;
use PhpSpec\ObjectBehavior;

class FinalGradeSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->finalGrade(100, 12)->shouldReturn(100);
        $this->finalGrade(99, 0)->shouldReturn(100);
        $this->finalGrade(10, 15)->shouldReturn(100);
        $this->finalGrade(85, 5)->shouldReturn(90);
        $this->finalGrade(55, 3)->shouldReturn(75);
        $this->finalGrade(55, 0)->shouldReturn(0);
        $this->finalGrade(20, 2)->shouldReturn(0);
    }
}
