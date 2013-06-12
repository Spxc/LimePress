<?php
	/**
	* The base configuration for LimePress
	* This file has the following configurations: MySQL settings, Table Prefix and
 	* Secret Keys. You can find more information
	**/

	define ('DB_HOST', '{{SETTING_1}}');
	define ('DB_NAME', '{{SETTING_2}}');
	define ('DB_USERNAME', '{{SETTING_3}}');
	define ('DB_PASSWORD', '{{SETTING_4}}');
	define ('DB_CHARSET', 'utf-8');
	define ('DB_COLLAT', '');

	define ('SECRET_KEY', '{{SETTING_5}}');
	define ('MASTER_KEY', '{{SETTING_6}}');
	define ('PASSWORD_SALT', '{{SETTING_7}}');
	define ('PASSWORD_PEPPER', '{{SETTING_8}}');

	define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
	define ('SITE_NAME', '{{SETTING_9}}');
	define ('SITE_ACTIVATED', '0');

	define ('TABLE_PREFIX', '{{SETTING_12}}');

?>