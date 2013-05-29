<?php
	$sitetitle = $_POST['sitename'];
	$username = $_POST['username'];
	$usrpsw = $_POST['password1'];
	$usrpsw2 = $_POST['password2'];
	$email = $_POST['email'];
	$db_name = DB_NAME;
	$db_host = DB_HOST;
	$db_user = DB_USERNAME;
	$db_pasw = DB_PASSWORD;
	$db_salt = PASSWORD_SALT;
	$db_pepper = PASSWORD_PEPPER;
	$pdo = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_pasw);
	// add this:
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

	try{
		  $statement = $pdo->prepare("INSERT INTO lp_users (id,username,password,email,salt,pepper,joined,name) VALUES ('','$username','$md5password','$email', '$db_salt', '$db_pepper', NOW(), 'Name')");

		  //$statement->bindParam(':var1',$name1);
		  // etc.

		  $statement->execute();
		}
		catch ( PDOException $exception )
		{
		    echo "PDO error :" . $exception->getMessage();
		}
?>