<?php
  include "control/controlICT.php";

  $page = htmlspecialchars($_POST['page']);
  $limit = htmlspecialchars($_POST['limit']);

  $kirim = new ICT;
  $kirim->dashboardKelolaUser($page, $limit);
?>
