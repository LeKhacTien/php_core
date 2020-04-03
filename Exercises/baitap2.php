<?php
    function letterChanges($str)
    {
        $shiftBy = 1;
        $alphabet = 'abcdefghijklmnopqrstuvwxyz';
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $newAlpha = substr($alphabet, $shiftBy) . substr($alphabet, 0, $shiftBy);
        $after = str_replace($vowels, array_map('strtoupper', $vowels), strtr($str, $alphabet, $newAlpha));

        return $after;
    }

    echo letterChanges('fun times!');
?>
