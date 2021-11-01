<?php

// $GLOBALS['hostname'] = 'localhost';
// $GLOBALS['username'] = 'root';
// $GLOBALS['password'] = '';
// $GLOBALS['db'] = 'amttran1_amt';

$GLOBALS['hostname'] = 'localhost';
$GLOBALS['username'] = 'root';
$GLOBALS['password'] = '';
$GLOBALS['db'] = 'amt-transport';



 
$GLOBALS['dbinv'] = mysqli_connect($GLOBALS['hostname'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['db']);
 
?>
