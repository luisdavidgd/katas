<?php

namespace spec\Mumbling;

use Mumbling\Mumbling;
use PhpSpec\ObjectBehavior;

class MumblingSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->accum("ZpglnRxqenU")->shouldReturn("Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx-Qqqqqqqq-Eeeeeeeee-Nnnnnnnnnn-Uuuuuuuuuuu");
        $this->accum("NyffsGeyylB")->shouldReturn("N-Yy-Fff-Ffff-Sssss-Gggggg-Eeeeeee-Yyyyyyyy-Yyyyyyyyy-Llllllllll-Bbbbbbbbbbb");
        $this->accum("MjtkuBovqrU")->shouldReturn("M-Jj-Ttt-Kkkk-Uuuuu-Bbbbbb-Ooooooo-Vvvvvvvv-Qqqqqqqqq-Rrrrrrrrrr-Uuuuuuuuuuu");
        $this->accum("EvidjUnokmM")->shouldReturn("E-Vv-Iii-Dddd-Jjjjj-Uuuuuu-Nnnnnnn-Oooooooo-Kkkkkkkkk-Mmmmmmmmmm-Mmmmmmmmmmm");
    }
}
