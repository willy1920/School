<?php
  include "config/publicSession.php";
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    include "config/publicHead.php";
  ?>
  <body>
    <menu class="leftMenu no-print">
      <img class="iconPeople" src="image/peopleIcon.png" alt="Icon People">

      <ul class="leftMenu-ul" id="leftMenu">
        <li class="leftMenu-li" id="leftMenu0" ><?php echo $_SESSION['user']; ?></li>
        <li class="leftMenu-li" id="leftMenu2" onclick="dashboardKelolaKelas()">Kelola Kelas</li>
        <li class="leftMenu-li" id="leftMenu1" onclick="dashboardKelolaWaliKelas()">Kelola Wali Kelas</li>
      </ul>
    </menu>

    <main id="respon">

    </main>

    <script type="text/javascript" src="js/PYP.js"></script>
  </body>
</html>
