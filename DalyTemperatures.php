<?php
class Solution {

    /**
     * @param Integer[] $temperatures
     * @return Integer[]
     */
    function dailyTemperatures($temperatures) {
        $answer = array_fill(0, count($temperatures), 0);
        $stack = [];

        for ($i = 0; $i < count($temperatures); $i++) {
            while (!empty($stack) && $temperatures[$i] > $temperatures[end($stack)]) {
                $index = array_pop($stack);
                $answer[$index] = $i - $index;
            }
            $stack[] = $i;
        }

        return $answer;
    }
}
