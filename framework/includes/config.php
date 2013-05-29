<?php
	/**
	* The base configuration for LimePress
	* This file has the following configurations: MySQL settings, Table Prefix and
 	* Secret Keys. You can find more information
	**/

	define ('DB_HOST', 'localhost');
	define ('DB_NAME', 'LimePress');
	define ('DB_USERNAME', 'root');
	define ('DB_PASSWORD', '');
	define ('DB_CHARSET', 'utf-8');
	define ('DB_COLLAT', '');

	define ('SECRET_KEY', '74be16979711d4c4e7c6647856188456');
	define ('MASTER_KEY', '833599df8b1acfb3c5e662c26e1eddc1');
	define ('PASSWORD_SALT', '29bd8faaccd2e6cd6de79f8de76b937d');
	define ('PASSWORD_PEPPER', 'cbf99a8816b63291e2a889968711f33d');

	define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
	define ('SITE_NAME', 'Test');
	define ('SITE_ACTIVATED', '1');

	define ('TABLE_PREFIX', 'lp_');

?>