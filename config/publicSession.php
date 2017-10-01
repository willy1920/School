<?php
  session_start();
  if(!isset($_SESSION['user']) && !isset($_SESSION['id']) && !isset($_SESSION['staf'])){
?>
  <script type="text/javascript">
    window.location = "index.php";
  </script>
<?php
  }
?>
