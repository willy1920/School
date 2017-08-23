<?php
  include "db.php";
  class TU extends Database{

    function dashboard(){
      //$mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      //$stmt = $mysqli->prepare("SELECT id, name, nis, nisn, sex, place_birth, date_birth, class_id");
    }
    function classID(){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $query = $mysqli->query("SELECT id, name FROM class");
      if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
          $Array[] = $row;
        }
        echo json_encode($Array);
      }
    }

    function generation(){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $query = $mysqli->query("SELECT id, generation FROM generation");
      if($query->num_rows > 0){
        while ($row = $query->fetch_assoc()) {
          $Array[] = $row;
        }
        echo json_encode($Array);
      }
    }

    function inputStudent($name, $nis, $nisn, $sex, $place, $date, $generation, $class){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $stmt = $mysqli->prepare("INSERT INTO students (name, nis, nisn, sex, place_birth, date_birth, generation, class_id)
      VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
      if($stmt){
        $stmt->bind_param("ssssssii", $name, $nis, $nisn, $sex, $place, $date, $generation, $class);
        if($stmt->execute()){
          $lastId = $stmt->insert_id;
          $sql = "INSERT INTO others(id) VALUES($lastId)";
          $mysqli->query($sql);

          $sql = "INSERT INTO dad(id) VALUES($lastId)";
          $mysqli->query($sql);

          $sql = "INSERT INTO mom(id) VALUES($lastId)";
          $mysqli->query($sql);

          $sql = "INSERT INTO guardian(id) VALUES($lastId)";
          $mysqli->query($sql);

          echo '{"code":"1", "id":"'.$lastId.'"}';
        } else{
          echo '{"code":"0"}';
        }
      } else{
        echo '{"code":"0"}';
      }
    }

    function inputOther($id, $nationality, $name, $address, $grade, $saudara, $ke, $language, $religion, $date){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $stmt = $mysqli->prepare("UPDATE others
        SET WN=?,
        asal_sekolah=?,
        alamat_asal_sekolah=?,
        kelas_pertama=?,
        jumlah_saudara=?,
        anak_ke=?,
        bahasa=?,
        agama=?,
        tanggal_diterima=?
        WHERE id=?");
        if($stmt){
          $stmt->bind_param("ssssiisssi", $nationality, $name, $address, $grade, $saudara, $ke, $language, $religion, $date, $id);
          if($stmt->execute()){
            echo '{"code":"1"}';
          } else{
            echo '{"code":"0"}';
          }
        } else{
          echo '{"code":"0"}';
        }
    }

    function inputDad($id, $name, $place, $date, $address, $job, $office, $number, $wa, $bbm, $email, $education, $nationality, $religion){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $stmt = $mysqli->prepare("UPDATE dad
        SET name=?,
        place_birth=?,
        date_birth=?,
        job=?,
        address=?,
        office=?,
        phone_number=?,
        wa=?,
        bbm=?,
        email=?,
        last_education=?,
        nationality=?,
        religion=?
        WHERE id=?");
      if ($stmt) {
        $stmt->bind_param("sssssssssssssi",
        $name, $place, $date, $job, $address, $office, $number, $wa, $bbm, $email, $education, $nationality, $religion, $id);
        if($stmt->execute()){
          echo '{"code":"1"}';
        } else{
          echo '{"code":"0"}';
        }
      } else{
        echo '{"code":"0"}';
      }
    }

    function inputMom($id, $name, $place, $date, $address, $job, $office, $number, $wa, $bbm, $email, $education, $nationality, $religion){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $stmt = $mysqli->prepare("UPDATE mom
        SET name=?,
        place_birth=?,
        date_birth=?,
        job=?,
        address=?,
        office=?,
        phone_number=?,
        wa=?,
        bbm=?,
        email=?,
        last_education=?,
        nationality=?,
        religion=?
        WHERE id=?");
      if ($stmt) {
        $stmt->bind_param("sssssssssssssi",
        $name, $place, $date, $job, $address, $office, $number, $wa, $bbm, $email, $education, $nationality, $religion, $id);
        if($stmt->execute()){
          echo '{"code":"1"}';
        } else{
          echo '{"code":"0"}';
        }
      } else{
        echo '{"code":"0"}';
      }
    }

    function inputGuardian($id, $name, $place, $date, $address, $job, $office, $number, $wa, $bbm, $email, $education, $nationality, $religion, $relationship){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $stmt = $mysqli->prepare("UPDATE guardian
        SET name=?,
        place_birth=?,
        date_birth=?,
        job=?,
        address=?,
        office=?,
        phone_number=?,
        wa=?,
        bbm=?,
        email=?,
        last_education=?,
        nationality=?,
        religion=?,
        relationship=?
        WHERE id=?");
      if ($stmt) {
        $stmt->bind_param("ssssssssssssssi",
        $name, $place, $date, $job, $address, $office, $number, $wa, $bbm, $email, $education, $nationality, $religion, $relationship, $id);
        if($stmt->execute()){
          echo '{"code":"1"}';
        } else{
          echo '{"code":"0"}';
        }
      } else{
        echo '{"code":"0", "a":"LOL"}';
      }
    }



  }
?>
