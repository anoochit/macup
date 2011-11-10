<?php

	// check authentication
	$obmc->isAuthen();
	
	$res=$obmc->getUserInfoByID($_SESSION["MCID"]);
 	$total=$obmc->getUserStatByID($_SESSION["MCID"]);
 	
 	
	
?>
<table id="dashboard-body">
<tr>
	<td><h3>Your Info : <?php echo $res->login; ?></h3></td>
</tr>
<tr>
	<td><h3>Amount = <?php echo count($total); ?></h3></td>
</tr>
</table>
<table id="dashboard-body">
<tr>
<td colspan="2"><h3>Stat Overall</h3></td>
</tr>
<?php 

	$resuser=$obmc->getUser();
	foreach ($resuser as $user) {
		$user_total=$obmc->getUserStatByID($user->id);
?>
<tr>
	<td><?php echo $user->login; ?></td> 
	<td>= <?php echo count($user_total); ?></td>
</tr>

<?php 
	}
	
?>
</table>