<?php
    $str = 'Reverse Vowels In A String';
    $vowel = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U'];
    $replace = [];

    for ($i = 0; $i<strlen($str); $i++) {
        if (in_array($str[$i], $vowel)) {
            $replace[$i] = $str[$i];
        }
    }

    $replaceIndex = array_reverse(array_keys($replace));
    $replaceValue = array_values($replace);
    $replace = array_combine($replaceIndex,$replaceValue);

    foreach ($replace as $key => $value) {
        $str[$key] = $replace[$key];
    }

    echo $str;
?>
