<?php
	/*
	* FUNCTIONS FILE
	* AUTHOR: Stian Wiik Instebø
	* DATE: 16.05.2013
	* COPYRIGHT: None
	*/

	include 'global.php';

	$db_host = DB_HOST;
	$db_name = DB_NAME;
	$db_user = DB_USERNAME;
	$db_pasw = DB_PASSWORD;

	$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pasw);

	//Functions
	function gen_password()
	{
		$rand = rand(99993453459, 191234123);
		echo $rand." | ";
		$rand_password = md5(md5(PASSWORD_SALT.$rand.PASSWORD_PEPPER));
		echo $rand_password;
	}

	//Website holders
	function get_header($object) {
		//Generate header
		echo SITE_NAME;
		echo "<br>".$object;
	}
	function get_posts($object) {
		//Get posts from DB
		
	}
	function get_content($object) {
		//Generate sidebar
		global $pdo;
		switch ($object) {
    		case "posts":
        		$stmt = $pdo->prepare("SELECT * FROM lp_posts");
 				$stmt->execute();
 				$rows = $stmt->fetchAll();
 				foreach ($rows as $row) {
 					echo "<ul>";
    				echo "<li>".$row['id']."</li>";
    				echo "</ul>";
				}
        		break;
    		case "sidebar":
        		$stmt = $pdo->prepare("SELECT * FROM lp_categories");
 				$stmt->execute();
 				$rows = $stmt->fetchAll();
 				foreach ($rows as $row) {
 					echo "<ul>";
    				echo "<li><a href='category.php?id=".$row['id']."'>".$row['title']."</a></li>";
    				echo "</ul>";
				}
        		break;
    		case "nav":
        		$stmt = $pdo->prepare("SELECT * FROM lp_nav");
 				$stmt->execute();
 				$rows = $stmt->fetchAll();
 				foreach ($rows as $row) {
 					echo "<ul>";
    				echo "<li><a href='".$row['link']."'>".$row['title']."</a></li>";
    				echo "</ul>";
				}
        		break;
		}
	}
	function get_footer($text) {
		//Generate footer
		echo "&copy " . date("Y") . " " . $text;
	}
	function get_searchform(){
		//Generate search form
		echo "<form method='POST' action='search.php'>";
		echo "<input type='text' name='search' id='search' class='search' placeholder='Search' />";
		echo "</form>";
	}

	//Website functions
	function have_posts(){
		//Check if there is any posts
	}
	function the_post() {
		//Show the specific post
	}

	//Config functions
	function get_status() {
		if (SITE_ACTIVATED == 0) {
			echo '<title>LimePress > Error</title>';
			include '/framework/includes/configure_site.php';
		}else{
			echo '<title>'.SITE_NAME.'</title>';
			include '/framework/themes/index.php';
		}
	}

	//Error messages
	function error_200 (){
		//Weird everything is OK
	}
	function error_301() {
		//Page Moved Permanently
	}
	function error_302() {
		//Resource not found
	}
	function error_307(){
		//You are getting redirected
	}
	function error_400() {
	 	//Bad request
	}
	function error_401() {
	 	//Unauthorized
	}
	function error_403() {
	 	//Server forbidden
	}
	function error_404(){
		//Page not found
	}
	function error_500(){
		//Internal Server Error
	}
	function error_501(){
		//Not Implemented
	}
	function error_503(){
		//Service Unavailable
	}
?>