<?php
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
	$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
	$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
	$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

	if ($iphone || $android || $palmpre || $ipod || $berry == true) { 
		header('Location: http://boilerplate.rawdesigns.net/mobile/');
		echo "<script>window.location='http://boilerplate.rawdesigns.net/mobile/'</script>";
	}
?>