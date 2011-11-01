<?php 

	$fname=trim($_POST['fname']);
	$lname=trim($_POST['lname']);
	
	if (($obmc->checkFnameLname($fname, $lname))==true) {
		echo "no";
	} else {
		echo "yes";
	}

?>