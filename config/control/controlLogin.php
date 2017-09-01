<?php
  include "db.php";
  class User extends Database{

    function login($user, $pass){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $user = strtolower($user);
      $pass = sha1($pass);
      $stmt = $mysqli->prepare(
        "SELECT users.user, users.pass, staf_status.staf_status
        FROM users
        INNER JOIN staf
        ON users.staf_id = staf.id
        INNER JOIN staf_status
        ON staf.staf_status = staf_status.id
        WHERE users.user=? and users.pass=?");

      if($stmt){
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $stmt->bind_result($user, $pass, $staf);
        $stmt->fetch();
        //echo "lol";
        if(isset($user)){
          echo '{"execute":"1",
            "user":"'.$user.'",
            "pass":"'.$pass.'",
            "staf":"'.$staf.'"}';
          session_start();
          $_SESSION['user'] = $user;
          $_SESSION['staf'] = $staf;
        } else{
          echo '{"execute":"0",
            "user":"'.$user.'",
            "pass":"'.$pass.'",
            "staf":"'.$staf.'"}';
        }

        $stmt->close();
      } else{
        echo '{"execute":"0"}';
      }
    }
  }

?>
