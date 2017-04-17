<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Bricks File Upload #3</title>  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="../stylesheets/foundation.css">
  -->  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../stylesheets/app.css">
  <script src="../javascripts/modernizr.foundation.js"></script>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<div class="row">
	<div class="four columns centered">
		<br/><br/><a href="../index.php"><img src="../images/bricks.jpg" /></a><br/>
		<p>
			<?php
				$valid_file_extensions = array(".jpg", ".jpeg", ".png");
				if(isset($_POST['upload'])) {
					$filename =  $_FILES['userfile']['name'];
					$img_type = $_FILES['userfile']['type'];
					$destination = 'uploads/' . $_FILES['userfile']['name'];
					if (($img_type == 'image/png') || ($img_type == 'image/jpeg')  ) {
						if (move_uploaded_file($_FILES['userfile']['tmp_name'],$destination)) {
							// TODO: AI issue #3, High, Cross-site Scripting, https://github.com/rbm1718/bricks/issues/3
							//
							// POST /upload-3/index.php HTTP/1.1
							// Host: localhost
							// Accept-Encoding: identity
							// Connection: close
							// Content-Length: 296
							// Content-Type: multipart/form-data; boundary=6ec686a1e67042d38eacaaa1cda5de31
							//
							// --6ec686a1e67042d38eacaaa1cda5de31
							// Content-Disposition: form-data; name="upload"
							//
							// 935137890000
							// --6ec686a1e67042d38eacaaa1cda5de31
							// Content-Disposition: form-data; name="userfile"; filename="'onmouseover='alert(1)'"
							// Content-Type: image/png
							//
							// <?php phpinfo(); ?>
							// --6ec686a1e67042d38eacaaa1cda5de31--
							//
							//
							// move_uploaded_file($_FILES['userfile']['tmp_name'], ('uploads/' . $_FILES['userfile']['name']))
							// TODO: AI issue #3, High, Cross-site Scripting, https://github.com/rbm1718/bricks/issues/3
							//
							// POST /upload-3/index.php HTTP/1.1
							// Host: localhost
							// Accept-Encoding: identity
							// Connection: close
							// Content-Length: 297
							// Content-Type: multipart/form-data; boundary=13db3188cc5e4609b27b48576655a755
							//
							// --13db3188cc5e4609b27b48576655a755
							// Content-Disposition: form-data; name="upload"
							//
							// 935137890000
							// --13db3188cc5e4609b27b48576655a755
							// Content-Disposition: form-data; name="userfile"; filename="'onmouseover='alert(1)'"
							// Content-Type: image/jpeg
							//
							// <?php phpinfo(); ?>
							// --13db3188cc5e4609b27b48576655a755--
							//
							//
							// move_uploaded_file($_FILES['userfile']['tmp_name'], ('uploads/' . $_FILES['userfile']['name']))
							echo "<div class=\"alert-box success\">Upload succesful: <a href='$destination'>here</a><a href=\"\" class=\"close\">&times;</a></div>";
						}
					} else {
						echo "<div class=\"alert-box alert\">Upload failed.<a href=\"\" class=\"close\">&times;</a></div>";
							}
							}
			?>
			<form enctype="multipart/form-data" action="index.php" method="POST">
				<fieldset>
					<legend>Upload</legend>
					<input name="userfile" class="small button" type="file" /><br/><br/>
					<input type="submit" class="small button" name="upload" id="upload" value="Upload" /><br/><br/>
				</fieldset>
			</form>
		</p><br/>
	</div>
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