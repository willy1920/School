<?php
  include "control/controlICT.php";

  $generation = htmlspecialchars($_POST['generation']);

  $kirim = new ICT;
  $kirim->biodata($generation);
?>
