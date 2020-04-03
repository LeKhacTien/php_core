<?php
    $myArray = ['a', 'b', 'c'];
    $otherArray = [1, 2, 3];
    $arr = array_merge($myArray, $otherArray);
    $myArray = array_slice($arr, 3, 3);
    $otherArray = array_slice($arr, 0, 3);

    print_r(array_reverse($myArray));
    echo "<br>";
    print_r(array_reverse($otherArray));
?>
