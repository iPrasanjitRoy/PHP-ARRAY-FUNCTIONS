<?php
/*-------Explode Function------- */

$str = "Hello World. It's A Beautiful Day";

$array = explode(" ", $str);

echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Using Limit with explode ------- */

$array2 = explode(" ", $str, 2);

echo "<pre>";
print_r($array2);
echo "</pre>";


$array3 = explode(" ", $str, 0); //-- Return In One Array Value

echo "<pre>";
print_r($array3);
echo "</pre>";

/*-------Implode Function------- */


$arr = array('Hello', 'World!', 'Beautiful', 'Day!');

$strr = implode(" ", $arr);

echo $strr;
echo '<br><br>';


/*---------You Can Use (Join) Function Work Same As Implode---------*/

$strr5 = join("<br>", $arr);

echo $strr5;
echo '<br><br>';
?>