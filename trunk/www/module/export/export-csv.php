<?php

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

$db->Execute("SET character_set_results=utf8");
$db->Execute("SET collation_connection=utf8_general_ci");
$db->Execute("SET NAMES 'utf8'");

$rs = $db->Execute($sql);

$path=dirname(__FILE__)."/cache/export.csv";

/*
$fp = fopen($path, "w");
    if ($fp) {
        rs2csvfile($rs, $fp); # write to file (there is also an rs2tabfile function)
        fclose($fp);
}
*/

header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=export_".time().".csv");
header("Pragma: no-cache");
header("Expires: 0");

echo rs2csvout($rs);

?>