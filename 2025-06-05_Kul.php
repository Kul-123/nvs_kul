<?php
    for ($i = 1; $i <= 100; $i++) {
        $text = "";
        // multiples of three
        if ($i % 3 == 0) {
            $text .= "Fizz";
        }
        // multiples of five
        if ($i % 5 == 0) {
            $text .= "Buzz";
        }
        if ($text == "") {
            echo $i . "<br>";
        } else {
            echo $text . "<br>";
        }
    }
?>