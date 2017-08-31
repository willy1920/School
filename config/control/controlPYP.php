<?php
  include 'db.php';

  class PYP extends Database
  {
    function dashboardKelolaWaliKelas(){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $sql = "SELECT * FROM class";
      $query = $mysqli->query($sql);
      $num = $query->num_rows;
      if($num > 0){
        ?>
        <h1>Manage Teacher Class</h1>
        Select class : <select id="class">
        <?php
          while ($row = $query->fetch_assoc()) {
            echo "<option value='".$row['id']."'>".$row['name_class']."</option>";
          }
        ?>
        </select>
        <br>
        <?php
          $sql = "SELECT staf.id,
                  staf.name
                  FROM staf
                  INNER JOIN staf_status
                  ON staf.staf_status = staf_status.id
                  WHERE staf_status.staf_status = 'Guru'";
          $query = $mysqli->query($sql);
          $num = $query->num_rows;
          if($num > 0){
        ?>
        Select teacher class :
        <select id="teacherClass">
          <?php

            while ($row = $query->fetch_assoc()) {
              echo "<option value='".$row['id']."'>".$row['name']."</option>";
            }
          ?>
        </select>
        <?php
          } else{
            ?>
            Select teacher class :
            <select id="teacherClass">
              <option value="">none</option>
            </select>
            <?php
          }
      }
      else{
        ?>
        <select id="class">
          <option value="">none</option>
        </select>
        <?php
      }
    }

    function dashboardKelolaKelas(){
      ?>
      Nama Kelas : <input type="text" id="namaKelas" placeholder="P1 Open-Minded" required><br>
      <button onclick="submitKelolaKelas()">Submit</button>
      <?php
    }

    function submitKelolaKelas($name){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $stmt = $mysqli->prepare("INSERT INTO class(name_class) VALUES(?)");
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
