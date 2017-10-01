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

    function dashboardKelolaStaf(){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $sql = "SELECT id, name FROM staf WHERE staf_status is null";
      $query = $mysqli->query($sql);
      if($query->num_rows > 0){
        ?>
          Select staf : <select id="staf">
            <?php
              while ($row = $query->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['name']."</option>";
              }
            ?>
          </select>
        <?php
      }
      else{
        ?>
          Select staf : <select id="staf">
            <option value="">none</option>
          </select>
        <?php
      }

      $sql = "SELECT * FROM staf_status WHERE staf_status <> 'root'";
      $query = $mysqli->query($sql);
      if($query->num_rows > 0){
        ?>
          <br>
          Select job : <select id="staf_status">
            <?php
              while ($row = $query->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['staf_status']."</option>";
              }
            ?>
          </select>
        <?php
      }
      else {
        ?>
          <br>
          Select job : <select id="staf_status">
            <option value="">none</option>
          </select>
          <br>
        <?php
      }
      ?>
        <br><button onclick="updateStafStatus()">Submit</button>
      <?php
    }

    function submitStafStatus($id, $status){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $sql = "UPDATE staf SET staf_status=? WHERE id=?";
      $stmt = $mysqli->prepare($sql);
      if($stmt){
        $stmt->bind_param("si", $status, $id);
        if($stmt->execute()){
          echo '{"code":"1"}';
        } else{
          echo '{"code":"0"}';
        }
      } else {
        echo '{"code":"0"}';
      }
    }
  }

?>
