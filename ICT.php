<?php
  include "config/publicSession.php";
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    include "config/publicHead.php";
  ?>
  <body>
    <menu class="leftMenu">
      <img class="iconPeople" src="image/peopleIcon.png" alt="Icon People">

      <ul class="leftMenu-ul" id="leftMenu">
        <li class="leftMenu-li" id="leftMenu0" ><?php echo $_SESSION['user']; ?></li>
        <li class="leftMenu-li" id="leftMenu1" >Kelola User</li>
        <li class="leftMenu-li" id="leftMenu2" onclick="biodata()">Print Biodata Siswa</li>
        <li class="leftMenu-li" id="leftMenu3" >Print Kartu Pelajar</li>
        <li class="leftMenu-li" id="leftMenu4" onclick="addGeneration()">Add Generation</li>
      </ul>
    </menu>

    <main id="respon">

    </main>

    <script type="text/javascript" src="js/ICT.js"></script>
  </body>
</html>
