<?php
function twoNumberSum($n1, $n2) {
    $nResult = '';
    $nMemory = 0;
    $n1Length = strlen($n1);
    $n2Length = strlen($n2);
    $maxLength = $n1Length > $n2Length ? $n1Length : $n2Length;

    for($i = 1; $i <= $maxLength; $i++) {
        $n1Val = ($n1Length - $i) >= 0 ? $n1[$n1Length - $i] : 0;
        $n2Val = ($n2Length - $i) >= 0 ? $n2[$n2Length - $i] : 0;
        $resultVal = (int)$n1Val + (int)$n2Val + $nMemory;
        $nMemory = (int)$resultVal >= 10 ? 1 : 0;
        $resultVal = $nMemory > 0 ? ((int)$resultVal - 10) : $resultVal;
        $nResult = $resultVal . $nResult;
    }

    return $nResult;
}

$n1 = '123453123';
$n2 = '484567';
echo $n1 . ' + ' . $n2 . ' = ' . twoNumberSum($n1, $n2);