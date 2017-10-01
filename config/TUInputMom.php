<?php
  include "control/controlTU.php";
  $id = htmlspecialchars($_POST['id']);
  $name = htmlspecialchars($_POST['name']);
  $place = htmlspecialchars($_POST['place']);
  $date = htmlspecialchars($_POST['date']);
  $address = htmlspecialchars($_POST['address']);
  $job = htmlspecialchars($_POST['job']);
  $office = htmlspecialchars($_POST['office']);
  $number = htmlspecialchars($_POST['number']);
  $wa = htmlspecialchars($_POST['wa']);
  $bbm = htmlspecialchars($_POST['bbm']);
  $email = htmlspecialchars($_POST['email']);
  $education = htmlspecialchars($_POST['education']);
  $nationality = htmlspecialchars($_POST['nationality']);
  $religion = htmlspecialchars($_POST['religion']);

  $name = ucwords($name);
  $place = ucwords($place);
  $address = ucwords($address);
  $job = ucwords($job);
  $office = ucwords($office);
  $nationality = ucwords($nationality);
  $religion = ucwords($religion);
  $education = ucwords($education);

  $input = new TU;
  $input->inputMom($id, $name, $place, $date, $address, $job, $office, $number, $wa, $bbm, $email, $education, $nationality, $religion);
?>
