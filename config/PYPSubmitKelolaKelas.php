<?php
  include "control/controlPYP.php";

  $name = htmlspecialchars($_POST['name']);

  $name = ucwords($name);
  $kirim = new PYP;
  $kirim->submitKelolaKelas($name)
?>
