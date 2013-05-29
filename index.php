<?php
	error_reporting(E_ALL|E_NOTICE);
	/*
	* TEMPLATE FILE
	* AUTHOR: Stian Wiik Instebø
	* DATE: 16.05.2013
	* COPYRIGHT: None
	*/
	include '/framework/includes/libs.php';

	echo "<h1>Test area - ATM</h1>";
	get_searchform();
	echo "<br>";
	get_status();
	echo "<br>";
	get_footer("Stianw Wiik Instebø");
	echo "<br>";
	get_header("Stian");
	echo "<br>";
	gen_password();
	echo "<br>Posts<br>";
	get_content("posts");
	echo "Nav<br>";
	get_content("nav");
	echo "Sidebar<br>";
	get_content("sidebar");
?>