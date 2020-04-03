<?php
    function longGestWord($sen)
    {
        if ($sen != '') {
            $strArr = explode(' ', preg_replace("/(?![.=$'€%-])\p{P}/u", "", $sen));
            $lrgWord = '';

            for ($i = 0; $i < count($strArr); $i++) {
                if (strlen($strArr[$i]) > strlen($lrgWord)) {
                    $lrgWord = $strArr[$i];
                }
            }

            return $lrgWord;
        } else {
            echo 'Chuỗi bị rỗng';
        }
    }

    echo longGestWord('I love dogs');
?>
