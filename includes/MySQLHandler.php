<?php
require_once(dirname(dirname(__FILE__)) . '/LocalSettings.php');

ini_set('display_errors',1); 
 error_reporting(E_ALL);
$con = mysql_connect($host,$dbuser,$dbpass);

//mysql_select_db($dbname,$con);
@mysql_select_db($dbname,$con) or die( "Unable to connect to the database: $dbname");


if (!$con)
 {
 // TODO: AI issue #12, High, System Information Leak, https://github.com/rbm1718/bricks/issues/12
 die('Could not connect: ' . mysql_error());
 }

?>