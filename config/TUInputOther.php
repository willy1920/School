<?php
  include "control/controlTU.php";

  $id = htmlspecialchars($_POST['id']);
  $nationality = htmlspecialchars($_POST['nationality']);
  $name = htmlspecialchars($_POST['name']);
  $address = htmlspecialchars($_POST['address']);
  $firstGrade = htmlspecialchars($_POST['firstGrade']);
  $saudara = htmlspecialchars($_POST['saudara']);
  $ke = htmlspecialchars($_POST['ke']);
  $language = htmlspecialchars($_POST['language']);
  $religion = htmlspecialchars($_POST['religion']);
  $accepted = htmlspecialchars($_POST['accepted']);
  $status = htmlspecialchars($_POST['status']);

  $nationality = ucwords($nationality);
  $language = ucwords($language);
  $name = ucwords($name);
  $address = ucwords($address);
  $religion = ucwords($religion);

  $input = new TU;
  $input->inputOther($id, $nationality, $name, $address, $firstGrade, $saudara, $ke, $language, $religion, $accepted, $status);
?>
