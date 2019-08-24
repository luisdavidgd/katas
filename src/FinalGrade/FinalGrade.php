<?php

namespace FinalGrade;

class FinalGrade
{
    const A_GRADE = 100;
    const B_GRADE = 90;
    const C_GRADE = 75;
    const D_GRADE = 0;

    public function finalGrade(int $exam, int $projects): int
    {
        if ($exam > 90 || $projects > 10) {
            return A_GRADE;
        } else if ($exam > 75 && $projects > 4) {
            return B_GRADE;
        } else if ($exam > 50 && $projects > 1) {
            return C_GRADE;
        }
        return D_GRADE;
    }
}
