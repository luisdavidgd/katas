<?php

namespace DecodeTheMorseCode;

use Morse\Text;

class DecodeMorse
{
    public function decode_morse(string $code): string
    {
        $text = new Text();
        return $text->fromMorse($code);
    }
}
