<?php
	require_once(dirname(dirname(__FILE__)) . '/includes/MySQLHandler.php');
	$user=$_GET['user'];
	if(isset($_GET['user'])) {
		$sql = "SELECT * FROM users WHERE name='$user'";
		$result=mysql_query($sql);
	} else {
		header("Location: index.php?user=harry");
		exit;
	 }
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Bricks Content Page #2</title>  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="../stylesheets/foundation.css">
  -->  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../stylesheets/app.css">
  <script src="../javascripts/modernizr.foundation.js"></script>
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="row">
	<div class="four columns centered">
		<br/><br/><a href="../index.php"><img src="../images/bricks.jpg" /></a>
		<p>
			<fieldset>
				<legend>Details</legend>
					<?php 
							if ($content = mysql_fetch_array($result)) {
								// TODO: AI issue #3, High, Cross-site Scripting, https://github.com/rbm1718/bricks/issues/3
								//
								// GET /content-2/index.php?user=935137890000 HTTP/1.1
								// Host: localhost
								// Accept-Encoding: identity
								// Connection: close
								//
								//
								//
								// (mysql_fetch_array(mysql_query((('SELECT * FROM users WHERE name=\'' . $_GET['user']) . '\'')))['idusers'] == '</b></fieldset></div></div><script>alert(1)</script>')
								//
								// mysql_fetch_array(mysql_query((('SELECT * FROM users WHERE name=\'' . $_GET['user']) . '\'')))
								// mysql_select_db(NULL, True)
								echo '<br/>User ID: <b>'. $content['idusers'].'</b><br/><br/>';
								// TODO: AI issue #3, High, Cross-site Scripting, https://github.com/rbm1718/bricks/issues/3
								//
								// GET /content-2/index.php?user=935137890000 HTTP/1.1
								// Host: localhost
								// Accept-Encoding: identity
								// Connection: close
								//
								//
								//
								// (mysql_fetch_array(mysql_query((('SELECT * FROM users WHERE name=\'' . $_GET['user']) . '\'')))['name'] == '</b></fieldset></div></div><script>alert(1)</script>')
								//
								// mysql_fetch_array(mysql_query((('SELECT * FROM users WHERE name=\'' . $_GET['user']) . '\'')))
								// mysql_select_db(NULL, True)
								echo 'User name: <b>'. $content['name'].'</b><br/><br/>';
								// TODO: AI issue #3, High, Cross-site Scripting, https://github.com/rbm1718/bricks/issues/3
								//
								// GET /content-2/index.php?user=935137890000 HTTP/1.1
								// Host: localhost
								// Accept-Encoding: identity
								// Connection: close
								//
								//
								//
								// (mysql_fetch_array(mysql_query((('SELECT * FROM users WHERE name=\'' . $_GET['user']) . '\'')))['email'] == '</b></fieldset></div></div><script>alert(1)</script>')
								//
								// mysql_fetch_array(mysql_query((('SELECT * FROM users WHERE name=\'' . $_GET['user']) . '\'')))
								// mysql_select_db(NULL, True)
								echo 'E-mail: <b>'. $content['email'].'</b><br/><br/>';
							} else if (!$result) {
								echo("Database query failed: " . mysql_error());
								} else {		
									echo 'Error! User does not exists';
							}
						?><br/>
			</fieldset>
		</p><br/>
	</div><br/><br/><br/>
	<center>
		<?php 
			if($showhint === true && isset($sql)) { 
				echo '<div class="eight columns centered"><div class="alert-box secondary">SQL Query: ';
				echo $sql; 
				echo '<a href="" class="close">&times;</a></div></div>';			
									} 
		?>
	</center>
</div>  
  <!-- Included JS Files (Uncompressed) -->
  <!--  
  <script src="../javascripts/jquery.js"></script>  
  <script src="../javascripts/jquery.foundation.mediaQueryToggle.js"></script>  
  <script src="../javascripts/jquery.foundation.forms.js"></script>  
  <script src="../javascripts/jquery.foundation.reveal.js"></script>  
  <script src="../javascripts/jquery.foundation.orbit.js"></script>  
  <script src="../javascripts/jquery.foundation.navigation.js"></script>  
  <script src="../javascripts/jquery.foundation.buttons.js"></script>  
  <script src="../javascripts/jquery.foundation.tabs.js"></script>  
  <script src="../javascripts/jquery.foundation.tooltips.js"></script>  
  <script src="../javascripts/jquery.foundation.accordion.js"></script>  
  <script src="../javascripts/jquery.placeholder.js"></script>  
  <script src="../javascripts/jquery.foundation.alerts.js"></script>  
  <script src="../javascripts/jquery.foundation.topbar.js"></script>  
  <script src="../javascripts/jquery.foundation.joyride.js"></script>  
  <script src="../javascripts/jquery.foundation.clearing.js"></script>  
  <script src="../javascripts/jquery.foundation.magellan.js"></script>  
  -->  
  <!-- Included JS Files (Compressed) -->
  <script src="../javascripts/jquery.js"></script>
  <script src="../javascripts/foundation.min.js"></script>  
  <!-- Initialize JS Plugins -->
  <script src="../javascripts/app.js"></script>  
</body>
</html>