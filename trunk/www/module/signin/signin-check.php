<?php
 
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

if (($obmc->getAuthen($username,$password))==true) {
 	// getinfo
	$res=$obmc->getUserInfoByLogin($username);
	// assign session
 	$_SESSION['MCID']=$res[0]->id;
 	echo "yes";
 } else {
 	echo "no";
 }
  	
?>
