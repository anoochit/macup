<?php

	require 'config.php';

	// load MacUp class	
	$obmc=new MacUp();
	
	// split value from request string	
	$ocreq=split("/",$_REQUEST['q']);
	
	

	// load necessary module
	if ((count($ocreq)) >1) {
		if ((file_exists("module/".$ocreq[0]."/".$ocreq[0]."-".$ocreq[1].".php")) AND ($ocreq[0]!="") AND ($ocreq[1]!="")) {
			// load template
			include "template/".$template."/header.php";
			include "module/".$ocreq[0]."/".$ocreq[0]."-".$ocreq[1].".php";
			include "template/".$template."/footer.php";
		} else {
			echo "module not fond";
		}
	} else {
		if ((file_exists("module/".$ocreq[0]."/".$ocreq[0].".php")) AND ($ocreq[0]!="")) {
			// load template
			include "template/".$template."/header.php";
			include "module/".$ocreq[0]."/".$ocreq[0].".php";
			include "template/".$template."/footer.php";
		} else {
			header("Location: ".$url."/signin");
		}
	}

	 

?>
