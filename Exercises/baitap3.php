<?php
    function createPhoneNumber(array $number)
    {
        $strArray = implode('', $number);
        preg_match('/^(\d{3})(\d{3})(\d{4})$/', $strArray, $matches);
        $result = '(' . $matches[1] . ')' . ' ' . $matches[2] . '-' . $matches[3];

        return $result;
    }

    echo createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]);
?>
