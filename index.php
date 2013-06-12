<?php
	error_reporting(E_ALL|E_NOTICE);
	/*
	* TEMPLATE FILE
	* AUTHOR: Stian Wiik Instebø
	* DATE: 16.05.2013
	* COPYRIGHT: None
	*/
	
	/*if (SITE_ACTIVATED == 0) {
			echo '<title>LimePress > Error</title>';
			include '/framework/includes/configure_site.php';
		}else{
			echo '<title>'.SITE_NAME.'</title>';
			//include '/framework/themes/index.php';
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
		} */
	$configfile = 'framework/includes/config.php';
	if (file_exists($configfile)) {
		include '/framework/includes/functions.php'; //Må fikse config
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
	} else {
    	$file = 'framework/includes/config.php.backup.php';
		$newfile = 'framework/includes/config.php';
		if (!copy($file, $newfile)) {
    		echo "failed to copy $file...\n";
		}

	}


	

?>