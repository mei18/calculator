<?php

require("calculatorService.php");

$num1 = $_GET['num1'];
$num2 =  $_GET['num2'];
$operation = $_GET['operation'];

$calculator = new calculatorService();

$print = $calculator->operations($num1, $num2, $operation);

echo($print);

