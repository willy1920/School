<?php
  include "control/controlICT.php";

  $a = htmlspecialchars($_POST['generation']);
  $kirim = new ICT;
  $kirim->generationSubmit($a);
?>
