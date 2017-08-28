<?php
  include 'db.php';

  class PYP extends Database
  {
    function dashboardKelolaWaliKelas(){

    }

    function dashboardKelolaKelas(){
      ?>
      Nama Kelas : <input type="text" id="namaKelas" placeholder="P1 Open-Minded" required><br>
      <button onclick="submitKelolaKelas()">Submit</button>
      <?php
    }

    function submitKelolaKelas($name){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $stmt = $mysqli->prepare("INSERT INTO class(name) VALUES(?)");
      if($stmt){
        $stmt->bind_param("s", $name);
        if($stmt->execute()){
          echo '{"code":"1"}';
        } else{
          echo '{"code":"0"}';
        }
      } else{
        echo '{"code":"0"}';
      }
    }
  }

?>
