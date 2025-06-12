<?php

class Solution {
    function maxArea($height) {
        $i = 0; // links
        $j = count($height) - 1; // rechts
        $maxArea = 0; // größte Fläche

        while ($i < $j) {
            $h = min($height[$i], $height[$j]);
            $w = $j - $i;
            // größte mal zweitgrößte
            $currentArea = $h * $w;

            if ($currentArea > $maxArea) {
                $maxArea = $currentArea;
            }

            if ($height[$i] < $height[$j]) {
                $i++;
            } else {
                $j--;
            }
        }

        return $maxArea; // größte Fläche
    }
}
?>