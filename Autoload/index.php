<?php
require __DIR__ . '/vendor/autoload.php';

use AHT\Http\Controllers\HomeController;

$homeCtrl = new HomeController;

print_r($homeCtrl->index());
echo "<br>";
$homeCtrl->hello();
