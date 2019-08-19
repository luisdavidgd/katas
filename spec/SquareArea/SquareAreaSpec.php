<?php

namespace spec\SquareArea;

use PhpSpec\ObjectBehavior;

class SquareAreaSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->square_area(0)->shouldEqual(0);
        $this->square_area(2)->shouldEqual(1.62);
        $this->square_area(14.05)->shouldEqual(80);

        // $this->assertEquals(0, $this->square_area(0));
        // $this->assertEquals(1.62, $this->square_area(2));
        // $this->assertEquals(80, $this->square_area(14.05));
    }
}
