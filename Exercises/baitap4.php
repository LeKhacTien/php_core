<?php
    function backspaces($str)
    {
        $arrCharacter = str_split($str);
        $outPut = [];

        for ($i = 0; $i < count($arrCharacter); $i++) {
            if ($arrCharacter[$i] !== '#') {
                array_push($outPut, $arrCharacter[$i]);
            } elseif ($arrCharacter[$i] === '#') {
                array_pop($outPut);
            }
        }

        return implode('', $outPut);
    }

    echo backspaces('abc#d##c');
?>
