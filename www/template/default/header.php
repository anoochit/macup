<?php 
	 global $ocreq;
	 header("Cache-Control: no-cache");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=ucwords($ocreq[0]); ?> - Mcdonald's Coupon </title>
<link rel="stylesheet" type="text/css" href="/template/default/style.css?<?php echo time(); ?>" />
<link rel="Stylesheet" type="text/css" href="/include/jquery/css/ui-darkness/jquery-ui-1.8.7.custom.css"/>	
<script type="text/javascript" src="/include/jquery/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/include/jquery-validate/jquery.validate.js"></script>
<script type="text/javascript" src="/include/jquery-validate/jquery.form.js"></script>
<script type="text/javascript" src="/include/jquery/js/jquery-ui-1.8.7.custom.min.js"></script>
<!-- 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
 -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<?php 

// load necessary module
if ((count($ocreq)) >1) {
	if ((file_exists("module/".$ocreq[0]."/".$ocreq[0]."-".$ocreq[1].".js")) AND ($ocreq[0]!="") AND ($ocreq[1]!="")) {
		$jscript="/module/".$ocreq[0]."/".$ocreq[0]."-".$ocreq[1].".js";
	} 
} else {
	if ((file_exists("module/".$ocreq[0]."/".$ocreq[0].".js")) AND ($ocreq[0]!="")) {
		$jscript="/module/".$ocreq[0]."/".$ocreq[0].".js";
	}
}

?>
<script type="text/javascript" src="<?php echo $jscript."?".time(); ?>"></script>
</head>
<body>
<?php 
	
	// if page is not login and logout page show header and menu

	if (($ocreq[0]!="signin") AND ($ocreq[0]!="signout")) { 
		
?>
<div id="dashboard-header"></div>
<div id="nav-menu">
<ul>
<li class="<?php echo ($ocreq[0]=="dashboard") ? "selected" : ""; ?>"><a href="<?=$url;?>/dashboard">Dashboard</a></li>
<li class="<?php echo ($ocreq[0]=="coupon") ? "selected" : ""; ?>"><a href="<?=$url;?>/coupon">Coupon</a></li>
<li class="<?php echo ($ocreq[0]=="report") ? "selected" : ""; ?>"><a href="<?=$url;?>/report">Report</a></li>
<li class="<?php echo ($ocreq[0]=="export") ? "selected" : ""; ?>"><a href="<?=$url;?>/export">Export</a></li>
<li class="<?php echo ($ocreq[0]=="signout") ? "selected" : ""; ?>"><a href="<?=$url;?>/signout">Logout</a></li>
</ul>
</div>
<?php 
	} // end if
?>