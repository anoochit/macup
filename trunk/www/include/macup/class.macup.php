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
	
	

}

?>
