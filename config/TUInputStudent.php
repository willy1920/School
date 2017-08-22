<?php
  include "control/controlTU.php";
  $name = htmlspecialchars($_POST['name']);
  $nis = htmlspecialchars($_POST['nis']);
  $nisn = htmlspecialchars($_POST['nisn']);
  $sex = htmlspecialchars($_POST['sex']);
  $place = htmlspecialchars($_POST['place']);
  $date = htmlspecialchars($_POST['date']);
  $generation = htmlspecialchars($_POST['generation']);
  $class = htmlspecialchars($_POST['class']);

  $input = new TU;
  $input->inputStudent($name, $nis, $nisn, $sex, $place, $date, $generation, $class);
?>
