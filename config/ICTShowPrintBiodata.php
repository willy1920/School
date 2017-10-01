<?php
  include "control/controlICT.php";

  $length = htmlspecialchars($_POST['length']);
  $data = array();

  for ($i=0; $i < $length ; $i++) {
    array_push($data, htmlspecialchars($_POST['a'.$i]));
  }

  $kirim = new ICT;
  $kirim->showPrintBiodata($data, $length);

?>
