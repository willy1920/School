<?php
  include "control/controlLogin.php";
  $user = htmlspecialchars($_POST['user']);
  $pass = htmlspecialchars($_POST['pass']);

  $login = new User;
  $login->login($user, $pass);
?>
