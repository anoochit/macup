<?php

	// check authentication
	$obmc->isAuthen();
	
	$sql = "SELECT 
				name as Name, 
				if( gender = 'm', 'ชาย', 'หญิง' ) AS Gender,
				address as Address,
				building as Building,
				soi as Soi,
				road as Road,
				district as District,
				city as City,
				state as Province,
				zipcode as Postcode,
				tel as Tel,
				email as Email
			FROM coupon,state
			WHERE state.id=coupon.state_id";
	
	$pager = new ADODB_Pager($db,$sql);
	$pager->Render($rows_per_page=20);
 
?>
