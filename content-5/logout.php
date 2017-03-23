<?php
session_start();
session_unset();
session_destroy();
if(isset($_COOKIE['User'])) {
  unset($_COOKIE['User']);
  // TODO: AI issue #5, High, Sensitive Cookie in HTTPS Session Without ‘Secure’ Attribute, https://github.com/rbm1718/bricks/issues/5
  setcookie('User', '', time() - 3600);
}
header("location:index.php");
exit();
?>