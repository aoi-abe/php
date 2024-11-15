<?php
function outputNumber($a)
{
    return "引数の値は" . $a . "です";

}


function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2,4);


function test($score1,$score2,$score3)
{
    $value = $score1 + $score2 + $score3;
    if ($value > 210) {
        echo $value . "点なので合格です";
    } else {
        echo $value . "点なので不合格です";
    }
}

$total = test(30,60,70);
echo $total;