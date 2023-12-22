<?php
/*-------Array Traversing Function------- */
$food = array('Orange', 'Banana', 'Grapes', 'Apple');

echo "<b>Current : </b>" . current($food) . "<br>";

echo "<b>Key : </b>" . key($food) . "<br>";

echo "<b>Pos : </b>" . pos($food) . "<br><br>";


/*-------Array Traversing Next Function------- */

next($food);

echo "<b>Current : </b>" . current($food) . "<br><br>";

next($food);

echo "<b>Current : </b>" . current($food) . "<br><br>";


/*-------Array Traversing Prev Function------- */

prev($food);

echo "<b>Current : </b>" . current($food) . "<br><br>";


/*-------Array Traversing End Function------- */

end($food);
echo "<b>Current : </b>" . current($food) . "<br>";
echo "<b>Key : </b>" . key($food) . "<br><br>";


/*-------Array Traversing Each Function------- */

/* EACH FUNCTION WAS DEPRECATED IN PHP 7.2 AND WAS REMOVED IN PHP 7.4 */
/* EACH FUNCTION WAS DEPRECATED IN PHP 7.2 AND WAS REMOVED IN PHP 7.4 */
/* EACH FUNCTION WAS DEPRECATED IN PHP 7.2 AND WAS REMOVED IN PHP 7.4 */
/* EACH FUNCTION WAS DEPRECATED IN PHP 7.2 AND WAS REMOVED IN PHP 7.4 */



/*-------Array Traversing Reset Function------- */

reset($food);
echo "<b>Current : </b>" . current($food) . "<br>";

?>