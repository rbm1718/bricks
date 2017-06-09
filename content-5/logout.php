<?php
session_start();
session_unset();
session_destroy();
if(isset($_COOKIE['User'])) {
  unset($_COOKIE['User']);
  // TODO: AI issue #19, High, 147, https://github.com/rbm1718/bricks/issues/19
  setcookie('User', '', time() - 3600);
}
header("location:index.php");
exit();
?>