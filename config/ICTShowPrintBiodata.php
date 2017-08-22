<?php
  $length = htmlspecialchars($_POST['length']);
  echo $length;

  for ($i=0; $i < $length ; $i++) {
    ${'data'.$i} = htmlspecialchars($_POST['a'.$i]);
  }
  $a = 0;
  echo $_POST['a'.$a];
?>
