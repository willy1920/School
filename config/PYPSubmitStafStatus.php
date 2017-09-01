<?php
include "control/controlPYP.php";

$id = htmlspecialchars($_POST['id']);
$status = htmlspecialchars($_POST['status']);

$kirim = new PYP;
$kirim->submitStafStatus($id, $status);
?>
