<?php

namespace App\Helpers;

class NumberRangesHelper
{
    public static function ranges($number)
    {
        $push = array();
        $alphabetStart = 'A';
        $letters = array($alphabetStart);

        while ($alphabetStart < 'ZZ') {
            $letters[] = ++$alphabetStart;
        }

        $tempEnd = 0;
        $arrayIndex = 0;
        for ($i = 1; $i < count($letters) + 1; $i++) {
            $start = $i;
            $end = ($start * 1000) - 1;
            if ($i == 1) {
                $push[$arrayIndex]['Start'] = 1;
                $push[$arrayIndex]['End'] = $end;
                $push[$arrayIndex]['Letter'] = $letters[$i - 1];
            } else {
                $push[$arrayIndex]['Start'] = $tempEnd + 1;
                $push[$arrayIndex]['End'] = $end;
                $push[$arrayIndex]['Letter'] = $letters[$i - 1];
            }
            $arrayIndex++;
            $tempEnd = $end;
        }

        $startFilter = array_filter(array_column($push, 'Start'), function ($n) use ($number) {
            return $n <= $number;
        });

        foreach ($startFilter as $key => $start) {
            if ($push[$key]['End'] >= $number) {
                return $push[$key]['Letter'];
            }
        }
    }
}
