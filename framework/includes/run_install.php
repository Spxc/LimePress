<?php
	include 'config.php';
	$db_name = DB_NAME;
	$db_host = DB_HOST;
	$db_user = DB_USERNAME;
	$db_pasw = DB_PASSWORD;
	$db_pfix = TABLE_PREFIX;
	
	//TABLES
	$tbl_posts = $db_pfix . "posts";
	$tbl_users = $db_pfix . "users";
	$tbl_sessions = $db_pfix . "sessions";
  $tbl_nav = $db_pfix . "nav";
  $tbl_categories = $db_pfix . "categories";

	//CREATES CONTENT.sql
    $con = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_pasw);
 		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $q="CREATE TABLE $tbl_posts (
  					title varchar(150) NOT NULL,
  					body text NOT NULL,
  					created timestamp NOT NULL,
  					user varchar(40) NOT NULL,
  					id int(20) NOT NULL AUTO_INCREMENT,
  					PRIMARY KEY (id),
  					UNIQUE KEY id (id)
  					) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
            
            CREATE TABLE $tbl_nav (
            title varchar(150) NOT NULL,
            link text NOT NULL,
            prefix varchar(100) NOT NULL,
            id int(20) NOT NULL AUTO_INCREMENT,
            PRIMARY KEY (id),
            UNIQUE KEY id (id)
            ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
            
            CREATE TABLE $tbl_categories (
            title varchar(150) NOT NULL,
            id int(20) NOT NULL AUTO_INCREMENT,
            PRIMARY KEY (id),
            UNIQUE KEY id (id)
            ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

        			CREATE TABLE $tbl_sessions (
    				session_id varchar(40) NOT NULL,
    				data text NOT NULL,
  					last_activity int(11) NOT NULL,
  					PRIMARY KEY (session_id)
  					) ENGINE=MyISAM DEFAULT CHARSET=latin1;

  					CREATE TABLE $tbl_users (
  					id int(11) NOT NULL AUTO_INCREMENT,
  					username varchar(40) NOT NULL,
  					password varchar(1000) NOT NULL,
  					email varchar(40) NOT NULL,
  					salt varchar(20) NOT NULL,
            pepper varchar(20) NOT NULL,
            joined timestamp NOT NULL,
  					name varchar(50) NOT NULL DEFAULT '',
  					PRIMARY KEY (id)
  					) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";
					try {
 							$con->exec($q);

						} catch (PDOException $e) {
							$e->getMessage();
							//echo "Looks like you already have the tables setup!";
						}
?>