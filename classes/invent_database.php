<?php 
require_once 'invent_logger.php';
require_once 'helper.php';

class InventDatabase {
  private $username;
  private $password;
  private $db;
  private $mysqli;
  private $logger;
  
  function __construct($username, $password, $db) {
    $this->username = $username;
    $this->password = $password;
    $this->db = $db;
    $this->logger = new InventLogger(Helper::$logfile);
    $this->connect();
  }
  
  function connect() {
    $this->mysqli = new mysqli('localhost', 'root', 'root', $this->db);
    if(mysqli_connect_errno()) {
      $this->logger->invent_log('Could not connect to the database');
    }
  }
  
  function authenticate() {
    $query = 'SELECT username,password FROM users WHERE username= "'.$this->username.'";';
    $result = $this->mysqli->query($query);
    while($row = $result->fetch_row()) {
      if($row[1] == $this->password) {
        return true;
      }
    }
  }
}
?>