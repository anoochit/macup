<?php 

class MacUp {

	function isAuthen(){
		global $url;
		if ((!isset($_SESSION['MCID'])) OR ($_SESSION['MCID']<=0)) {
			?>
			<script type="text/javascript">
				location.replace("<?=$url; ?>/signin");
			</script>
			<?
		}
	}
	
	function pageRedirect($page) {
		global $url;
		?>
		<script type="text/javascript">
			location.replace("<?=$url; ?>/signin");
		</script>
		<?
	}
	
	function getAuthen($user,$pass) {
		$obuser=new MacUser();
		$res=$obuser->Find("login LIKE '".$user."' AND password LIKE '".sha1($pass)."' AND enable=1 ");
		
		if ((count($res))==1) {
			return true;
		} else {
			return false;
		}
	
	}
	
	function getUserInfoByLogin($user) {
		$obuser=new MacUser();
		$res=$obuser->Find("login = '".$user."'");
		return $res;
	}
	
	function getStateOption() {
		$obstate= new MacState();
		$res=$obstate->Find("id > 0");

		// has item to display
		if ((count($res))>1){
         echo "<select id='province' name='province'>";
         foreach ($res as $item) {
            echo "<option value='".$item->id."'>".$item->state;
         }
         echo "</select>";
  		}		
	}
	
	function checkFnameLname($fname,$lname){
		$name=$fname." ".$lname;
		$obcoupon=new MacCoupon();
		$res=$obcoupon->Find("name LIKE '".$name."'");
		if ((count($res))==1){
			return true;
		} else {
			return false;
		}
	}
	

}

?>
