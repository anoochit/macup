<?php

	// check authentication
	$obmc->isAuthen();
	
	$res=$obmc->getUserInfoByID($_SESSION["MCID"]);
 	$total=$obmc->getUserStatByID($_SESSION["MCID"]);
 	
 	
	
?>
<table id="dashboard-body">
<tr>
	<td><h3>Your Info = <?php echo $res->login; ?>, amount = <?php echo count($total); ?></h3></td>
</tr>
</table>
<table id="dashboard-body">
<tr>
<td colspan="2"><h3>Stat Overall</h3></td>
</tr>
<?php 

	$resuser=$obmc->getUser();
	$total=0;
	foreach ($resuser as $user) {
		$user_total=$obmc->getUserStatByID($user->id);
			$amount=count($user_total);
			$total+=$amount;
?>
<tr>
	<td><?php echo $user->login; ?></td> 
	<td>= <?php echo $amount; ?></td>
</tr>

<?php 
	}
	
?>
<tr>
	<td><h4>Total</h4></td> 
	<td><h4>= <?php echo $total; ?></h4></td>
</tr>
</table>