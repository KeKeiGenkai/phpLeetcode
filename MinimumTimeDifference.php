<?php
    function findMinDifference($timePoints) {
        $minutes = [];
        foreach ($timePoints as $time) {
            list($hour, $minute) = explode(':', $time);
            $minutes[] = ($hour * 60 + $minute) % (24 * 60);
        }
        sort($minutes);
        $minDiff = 1440;
        $n = count($minutes);
        for ($i = 1; $i < $n; $i++) {
            $minDiff = min($minDiff, $minutes[$i] - $minutes[$i - 1]);
        }
        $minDiff = min($minDiff, 1440 - $minutes[$n - 1] + $minutes[0]);
        return $minDiff;
    }

print_r(findMinDifference(["00:00","22:59","01:00"]));