<?php

require_once('Adodb/adodb.inc.php');
require_once('Adodb/tojson.inc.php');

// we're using the mysql "world" database downloadable from http://dev.mysql.com/doc/
$dbType = 'mysql';
$dbHost = 'localhost';
$dbName = 'world';
$dbUser = 'test';
$dbPass = 'test';

$db = ADONewConnection($dbType);
$db->Connect($dbHost, $dbUser, $dbPass, $dbName);
$db->SetFetchMode(ADODB_FETCH_ASSOC);

$sql = "SELECT * FROM Country LIMIT 10";
$result = $db->Execute($sql);

if(!$result)
{
	echo $db->ErrorMsg();
}
else 
{
	echo rs2json($result);
	
	// you may want to utf8_encode the results instead (works better in IE this way)
	//echo utf8_encode(rs2json($result));
}

$result->close();
$db->close();

?>
