<?php
include_once('classes/PrimeNumberMulltiplication.php');

## Note: This code is not tested by running through Command Prompt
## To Run through Command Prompt, please enable the below two lines of code.

//$opts = getopt('count:');
//$requiredPrimeCount = $opts['count'];
$requiredPrimeCount = 10;
$primeMulObj = new PrimeNumberMultiplication($requiredPrimeCount);
//print_r($primeMulObj->getPrimeMulitplicationResult());
$primeMulObj->renderMultiplicationTable($primeMulObj->getPrimeMulitplicationResult());

?>