<?php
    function numberInString($str)
    {
        preg_match_all('!\d+!', $str, $matches);

        return max($matches[0]);
    }

    echo numberInString('gh12cdy695m1');
?>
