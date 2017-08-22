<?php
  class Database
  {
    protected $host;
    protected $user;
    protected $pass;
    protected $name;
    function __construct() {
      $this->host = "localhost";
      $this->user = "root";
      $this->pass = "";
      $this->name = "tb";
    }
  }

?>
