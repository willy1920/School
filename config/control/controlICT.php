<?php
  include "db.php";

  class ICT extends Database{

    function dashboardBiodata(){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $query = $mysqli->query("SELECT * FROM generation");
      $num = $query->num_rows;
      if($num > 0){
        ?>
          <select id="generationOption">
        <?php
        while ($row = $query->fetch_assoc()) {
          echo "<option value='".$row['id']."'>".$row['generation']."</option>";
        }
        ?>
          </select><br>
          <input type="submit" onclick="selectGeneration()">
        <?php
      }
    }

    function biodata($generation){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $sql = "SELECT students.id,
        students.name FROM
        students
        INNER JOIN generation ON students.generation = generation.id
        WHERE generation.id = ".$generation;
      $query = $mysqli->query($sql);
      $num = $query->num_rows;
      if($num > 0){
        ?>
        <table id="tableBiodata">
        <?php
        while ($row = $query->fetch_assoc()) {
          ?>
          <tr>
            <td><input type="checkbox" value="<?php echo $row['id']; ?>"></td>
            <td><?php echo $row['name']; ?></td>
          </tr>
          <?php
        }
        ?>
          <tr>
            <td><input type="submit" onclick="submitBiodata()"></td>
          </tr>
        </table>
        <?php
      } else{
        echo "Tidak ada data";
      }
    }

    function dashboardGeneration(){
      ?>
      Generasi ke : <input type="number" id="generation" placeholder="21" autofocus><br>
      <input type="submit" onclick="generationSubmit()">
      <?php
    }

    function generationSubmit($a){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $stmt = $mysqli->prepare("INSERT INTO generation (generation) VALUES (?)");
      if($stmt) {
        $stmt->bind_param("i", $a);
        if($stmt->execute()){
          echo '{"code":"1"}';
        } else {
          echo '{"code":"0"}';
        }
      } else{
        '{"code":"0"}';
      }
    }

  }

?>
