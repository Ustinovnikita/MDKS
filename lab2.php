<?php
function sumTime(string $timeOne, string $timeTwo): string
{
    $timecount = strtotime($timeOne) + strtotime($timeTwo) - strtotime('00:00:00');
    return date('H:i:s', $timecount);
}

echo sumTime('10:20:30', '10:20:30');
