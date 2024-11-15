<?php

$a = 15;
$b = 3;
$c = 10;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;


?>

<p>
    <?php 
    {echo $answer1;
    echo "<br>";
    echo $answer2;
    echo "<br>";
    echo $answer3;
    echo "<br>";
    echo $answer4;
    echo "<br>";
    echo $answer5;
}
    
    ?>
</p>

<?php
$a = 20;
$b = 5;

{
echo ($a > $b);
echo "<br>";
}
?>

<?php
$a = $b = 10;
$c = $d = 5;
{
echo ++$a;
echo "<br>";
echo $b++;
echo "<br>";
echo --$c;
echo "<br>";
echo $d--;
}
?>