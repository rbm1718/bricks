<?php
session_start();
session_unset();
session_destroy();
if(isset($_COOKIE['User'])) {
  // TODO: AI issue #20, High, 159, https://github.com/rbm1718/bricks/issues/20
  unset($_COOKIE['User']);
  setcookie('User', '', time() - 3600);
}
header("location:index.php");
exit();
?>