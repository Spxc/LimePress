<style type="text/css">
	body {
		font-family: sans-serif;
		background: #f9f9f9;
		margin: 2em auto;
		padding: 1em 2em;
	}
	#holder #text code {
		font-family: Consolas, Monaco, monospace;
    }
    #holder {
    	width: 765px;
    	height: 300px;
    	margin: 0 auto;
    	border: thin solid #CCC;
    	-moz-border-radius: 3px;
		border-radius: 3px;
		background: #fff;
    }
    #holder #text {
    	margin: 40px;
    }
    a {
		color: #21759B;
		text-decoration: none;
	}
	a:hover {
			color: #D54E21;
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
</style>
	<div id="holder">
		<div id="text">
			<p>There doesn't seem to be a <code>config.php</code> file. We need this before we can get started.</p>
			<p>Need more help? <a href="#">We got it.</a></p>
			<p>You can create a <code>config.php</code> file through a web interface, but this doesn't work for all server setups. The safest way is to manually create the file. </p>
			<a href="setup_config.php" class="button button-large">Create a Configuration File</a>
		</div>
	</div>