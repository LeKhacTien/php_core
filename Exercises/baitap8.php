<?php
    function commas($number)
    {
        if ($number <= 1000) {
            return number_format(round($number, 3), 0);
        }

        return number_format(round($number, 3), 3);
    }

    echo commas(1000000.123);
?>
