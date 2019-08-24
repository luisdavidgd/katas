<?php

namespace CenturyFromYear;

class CenturyFromYear
{
    public function centuryFromYear(int $year): int
    {
        return (int) ceil($year / 100);
    }
}
