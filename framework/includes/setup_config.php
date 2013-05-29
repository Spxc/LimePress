<style type="text/css">
	body {
		font-family: sans-serif;
		background: #f9f9f9;
		margin: 2em auto;
		padding: 1em 2em;
		font-size: 14px;
	}
	#holder #text code {
		font-family: Consolas, Monaco, monospace;
    }
    #holder {
    	width: 765px;
    	margin: 0 auto;
    	border: thin solid #CCC;
    	-moz-border-radius: 3px;
		border-radius: 3px;
		background: #fff;
    }
    #holder #text {
    	margin: 40px;
    }
    #subheader {
    	border-bottom: thin solid #CCC;
    }
    .form-table {
    	border-collapse: collapse;
		margin-top: 1em;
		width: 100%;
    }
    .form-table td {
		margin-bottom: 9px;
		padding: 10px 20px 10px 0;
		border-bottom: 8px solid #fff;
		font-size: 14px;
		vertical-align: top;
		width: 50px|;
	}

	.form-table th {
		font-size: 14px;
		text-align: left;
		padding: 16px 20px 10px 0;
		border-bottom: 8px solid #fff;
		width: 140px;
		vertical-align: top;
	}

	.form-table code {
		line-height: 18px;
		font-size: 14px;
	}

	.form-table p {
		margin: 4px 0 0 0;
		font-size: 11px;
	}
    a {
		color: #21759B;
		text-decoration: none;
	}
	a:hover {
			color: #D54E21;
	}
	h1 {
		text-align: center;
	}
	.button {
			display: inline-block;
			text-decoration: none;
			font-size: 14px;
			line-height: 23px;
			height: 24px;
			margin: 0;
			padding: 0 10px 1px;
			cursor: pointer;
			border-width: 1px;
			border-style: solid;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			white-space: nowrap;
			-webkit-box-sizing: border-box;
			-moz-box-sizing:    border-box;
			box-sizing:         border-box;
			background: #f3f3f3;
			background-image: -webkit-gradient(linear, left top, left bottom, from(#fefefe), to(#f4f4f4));
			background-image: -webkit-linear-gradient(top, #fefefe, #f4f4f4);
			background-image:    -moz-linear-gradient(top, #fefefe, #f4f4f4);
			background-image:      -o-linear-gradient(top, #fefefe, #f4f4f4);
			background-image:   linear-gradient(to bottom, #fefefe, #f4f4f4);
			border-color: #bbb;
		 	color: #333;
			text-shadow: 0 1px 0 #fff;
		}
		.button:hover,
		.button:focus {
			background: #f3f3f3;
			background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#f3f3f3));
			background-image: -webkit-linear-gradient(top, #fff, #f3f3f3);
			background-image:    -moz-linear-gradient(top, #fff, #f3f3f3);
			background-image:     -ms-linear-gradient(top, #fff, #f3f3f3);
			background-image:      -o-linear-gradient(top, #fff, #f3f3f3);
			background-image:   linear-gradient(to bottom, #fff, #f3f3f3);
			border-color: #999;
			color: #222;
		}
		.button:focus  {
			-webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.2);
			box-shadow: 1px 1px 1px rgba(0,0,0,.2);
		}
		.button:active {
			outline: none;
			background: #eee;
			background-image: -webkit-gradient(linear, left top, left bottom, from(#f4f4f4), to(#fefefe));
			background-image: -webkit-linear-gradient(top, #f4f4f4, #fefefe);
			background-image:    -moz-linear-gradient(top, #f4f4f4, #fefefe);
			background-image:     -ms-linear-gradient(top, #f4f4f4, #fefefe);
			background-image:      -o-linear-gradient(top, #f4f4f4, #fefefe);
			background-image:   linear-gradient(to bottom, #f4f4f4, #fefefe);
			border-color: #999;
			color: #333;
			text-shadow: 0 -1px 0 #fff;
			-webkit-box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
		 	box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
		}
		.fieldinput {
			line-height: 20px;
			font-size: 15px;
			padding: 2px;
			border: 1px #dfdfdf solid;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			font-family: sans-serif;
		}
</style>
<script type="text/javascript" src='http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js'></script>
<script type="text/javascript" src='../libs/pswstrength/password_strength_plugin.js'></script>
<link rel="stylesheet" type="text/css" href="../libs/pswstrength/style.css">
<script>
                        $(document).ready( function() {

                                //BASIC
                                $(".password_test").passStrength({
                                        userid: "#user_id"
                                        });
                                
                                //ADVANCED
                                $(".password_adv").passStrength({
                                        shortPass:              "top_shortPass",
                                        badPass:                "top_badPass",
                                        goodPass:               "top_goodPass",
                                        strongPass:             "top_strongPass",
                                        baseStyle:              "top_testresult",
                                        userid:                 "#user_id_adv",
                                        messageloc:             0
                                });
                        });
                </script>
<script>
$(document).ready(function() {
  $("#password2").keyup(validate);
});


function validate() {
  var password1 = $("#password1").val();
  var password2 = $("#password2").val();
    if(password1 == password2) {
       $("#validate-status").text("Password matches!");        
    }
    else {
        $("#validate-status").text("The passwords do not match!");  
    }
}
</script>
<div id="holder">
	<div id="text">
<?php
	$page = (isset ($_REQUEST['step'])) ? $_REQUEST['step'] : '0';
	if ($page == '0'){
		echo '<h1>LimePress Installation</h1>';
		echo '<p>Welcome. Before getting started, we need some information on the database. You will need to know the following items before proceeding.</p>';
		echo '<p>1. Database name</p>';
		echo '<p>2. Database username</p>';
		echo '<p>3. Database password</p>';
		echo '<p>4. Database host</p>';
		echo '<p>5. Table prefix (if you want to run more than one WordPress in a single database)</p>';
		echo '<a href="?step=1" class="button button-large">Next step</a>';
	}
	if ($page == '1'){
		echo '<h1>LimePress Installation</h1>';
		$form = '<p>Below you should enter your database connection details. If you’re not sure about these, contact your host.</p>
		<form method="POST" action="?step=1">
			<table class="form-table">
				<tr>
					<td><b>Database Name</b></td>
					<td><input type="text" value="LimePress" name="db_name" class="fieldinput"/></td>
					<td>The name of the database you want to run WP in.</td>
				</tr>
				<tr>
					<td><b>User Name</b></td>
					<td><input type="text" value="username" name="db_username" class="fieldinput"/></td>
					<td>Your MySQL username</td>
				</tr>
				<tr>
					<td><b>Password</b></td>
					<td><input type="text" value="password" name="db_password" class="fieldinput"/></td>
					<td>...and your MySQL password.</td>
				</tr>
				<tr>
					<td><b>Database Host</b></td>
					<td><input type="text" value="localhost" name="db_host" class="fieldinput"/></td>
					<td>You should be able to get this info from your web host, if <code>localhost</code> does not work.</td>
				</tr>
				<tr>
					<td><b>Table Prefix</b></td>
					<td><input type="text" value="lp_" name="db_prefix" class="fieldinput"/></td>
					<td>If you want to run multiple LimePress installations in a single database, change this.</td>
				</tr>
			</table>
			<input type="submit" value="Submit" name="mysql-btn" class="button button-large"/>
		</form>';
		echo $form;
		if (isset($_POST['mysql-btn'])){
			//Post commands from the form
			$db_host = $_POST['db_host'];
			$db_name = $_POST['db_name'];
			$db_username = $_POST['db_username'];
			$db_password = $_POST['db_password'];
			$db_prefix = $_POST['db_prefix'];
			$secret_key = md5(md5($db_password));
			$master_key = md5(md5(rand(1111111111111111111111113212341324, 99999999999999)));
			$salt = md5(md5(rand(1122, 9999)));
			$pepper = md5(md5(rand(1132, 9993)));
			try {
				//Check if it 
    			$dbh = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);
    			$dbh = null;
    			//Writing to the Config.php file
    			$file = file_get_contents( "config.php");
				$config = str_replace( 
    			array( '{{SETTING_1}}', '{{SETTING_2}}', '{{SETTING_3}}', '{{SETTING_4}}', '{{SETTING_5}}', '{{SETTING_6}}', '{{SETTING_7}}', '{{SETTING_8}}', '{{SETTING_12}}'),
    			array( $db_host, $db_name, $db_username, $db_password, $secret_key, $master_key, $salt, $pepper, $db_prefix),
   				$file
				);
				file_put_contents( 'config.php', $config);
    			echo '<meta http-equiv="Refresh" Content="0; URL=?step=2">';   
			} catch (PDOException $e) {
    			print "Error!: " . $e->getMessage() . "<br/>";
    			die();
			}
		}
	}
	if ($page == '2'){
		echo '<h1>LimePress Installation</h1>';
		echo "<p>All right sparky! You've made it through this part of the installation. LimePress can now communicate with your database. If you are ready, time now to...</p>";
		echo '<a href="?step=3" class="button button-large">Run the install</a>';
	}
	if ($page == '3'){
		//Includes config to do the inital setup for the DB
		include 'run_install.php';
		echo '<h1>LimePress Installation</h1>';
		echo '<div id="subheader"><h2>Welcome</h2></div>';
		echo '<p> You may want to browse the <a href="#">ReadMe documentation</a> at your leisure. Otherwise, just fill in the information below and you'."'".'ll be on your way to using the most extendable and powerful personal publishing platform in the world.</p>';
		
		echo '<div id="subheader"><h2>Information needed</h2></div>';
		echo 'Please provide the following information. Don'."'".'t worry, you can always change these settings later';
		echo '<br>';

		$form = '
		<form method="POST" action="#">
			<table class="form-table">
				<tr>
					<td><b>Site Title</b></td>
					<td><input type="text" name="sitename" class="fieldinput"/></td>
				</tr>
				<tr>
					<td><b>Username</b></td>
					<td><input type="text" value="admin" name="username" class="fieldinput" id="user_id_adv"/></td>
				</tr>
				<tr>
					<td><b>Password, twice</b></td>
					<td><input type="password" name="password1" id="password1" class="password_adv"/></td>
				</tr>
				<tr>
					<td><small><p>A password will be automatically generated</p>
					<p> for you if you leave this blank.</p></small></td>
					<td><input type="password" name="password2" id="password2" class="fieldinput"/></td>
				</tr>
				<tr>
					<td><b></b></td>
					<td><p id="validate-status"></p></td>
				</tr>
				<tr>
					<td><b>Your E-mail</b></td>
					<td><input type="text" name="email" class="fieldinput"/></td>
				</tr>
				<tr>
					<td><b>Privacy</b></td>
					<td vertical-align="right"><input type="checkbox" value="" name="privacy" class="fieldinput"/></td>
					<td>Allow search engines to index this site.</td>
				</tr>
			</table>
			<input type="submit" value="Next" name="admin-btn" class="button button-large"/>
		</form>';
		echo $form;
		if (isset($_POST['admin-btn'])){
			$sitetitle = $_POST['sitename'];
			$username = $_POST['username'];
			$usrpsw = $_POST['password1'];
			$usrpsw2 = $_POST['password2'];
			$email = $_POST['email'];

			$md5password = md5(md5(PASSWORD_SALT . $usrpsw . PASSWORD_PEPPER));
			if ($sitetitle){
				if ($username){
					if ($usrpsw == $usrpsw2){
							if ($email){
							$file = file_get_contents( "config.php");
							$config = str_replace( 
    						array( '0', '{{SETTING_9}}'),
    						array( '1', $sitetitle),
   							$file
							);
							file_put_contents( 'config.php', $config);
    						echo '<meta http-equiv="Refresh" Content="0; URL=?step=4">';
    						include 'run_install_user.php';						
						}else{
							echo "You have to type in a email adress!";
						}
					}else{
						echo "You have to type in two password which matches!";
					}
				}else{
					echo "You have to type in a username!";
				}
			}else{
				echo "You have to specify a site title!";
			}			
		}
	}
	if ($page == '4'){
		echo '<h1>LimePress Installation</h1>';
		echo '<p>DONE!</p>';
		echo '<a href="?step=0" class="button button-large">Next</a>';
	}
?>
	</div>
</div>