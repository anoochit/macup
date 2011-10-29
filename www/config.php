<?php

require_once('include/adodb5/adodb.inc.php');
require_once('include/adodb5/adodb-active-record.inc.php');

$dbhost="localhost";
$dbname="macup";
$dbusername="root";
$dbpassword="monalisa";

$url="http://macup.redline.net";

$template="default";

$db = &ADONewConnection('mysql');
$db->PConnect($dbhost,$dbusername,$dbpassword,$dbname);

//$db->debug=1;

if (!$db) die("Connection failed");

ADOdb_Active_Record::SetDatabaseAdapter($db);

require 'include/macup/class.macup.php';
require 'include/macup/class.user.php';
require 'include/macup/class.coupon.php';


session_start();


?>
