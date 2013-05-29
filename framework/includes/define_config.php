<?php
	$searchF  = array('{DB_HOST}','{DB_NAME}','{DB_USERNAME}','{DB_PASSWORD}');
	$replaceW = array($db_host, $db_name, $db_username, $db_password);
	$fh = fopen("config.php", 'w');
	$file = file_get_contents($fh);
	$file = str_replace($searchF, $replaceW, $file);
	fwrite($fh, $file);
?>