<?php
    function vowelCount($str)
    {
        return preg_match_all('/[aeiou]/i', $str, $matches);
    }

    echo vowelCount('Hellou iouu world');
?>
