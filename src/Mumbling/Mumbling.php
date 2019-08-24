<?php

namespace Mumbling;

class Mumbling
{
    public function accum($s)
    {
        $parts = [];

        foreach (str_split($s) as $index => $part) {
            $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
        }

        return implode('-', $parts);
    }
}
