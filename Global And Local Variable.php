<?php
$x = 10;

function test()
{
    global $x;
    echo "Variable X Inside Function : $x";
}
test();

echo "Variable X Outside Function : $x";




$a = 5;
$b = 10;

function testx()
{
    global $a, $b;
    $a = $a + $b;
}

testx();
echo $a;
?>