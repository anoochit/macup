<?php 


	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$building=$_POST['building'];
	$soi=$_POST['soi'];
	$road=$_POST['road'];
	$district=$_POST['district'];
	$city=$_POST['city'];
	$province=$_POST['province'];
	$postcode=$_POST['postcode'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	
	//$db->debug=1;

	$obcoupon=new MacCoupon();
	$obcoupon->name=trim($fname)." ".trim($lname);
	$obcoupon->gender=trim($gender);
	$obcoupon->address=trim($address);
	$obcoupon->building=trim($building);
	$obcoupon->soi=trim($soi);
	$obcoupon->road=trim($road);
	$obcoupon->district=trim($district);
	$obcoupon->city=trim($city);
	$obcoupon->state_id=$province;
	$obcoupon->zipcode=trim($postcode);
	$obcoupon->tel=trim($tel);
	$obcoupon->email=trim($email);
	$obcoupon->user_id=$_SESSION["MCID"];
	$res = $obcoupon->Save();

	if (!$res) {
		echo "no";
	} else {
		echo "yes";
	}


?>