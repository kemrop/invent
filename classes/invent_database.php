<?php 
require_once 'classes/invent_logger.php';

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
    $this->connect();
    $this->logger = new InventLogger();
  }
  
  function connect() {
    $this->mysqli = new mysqli('localhost', 'roott', 'root', $this->db);
    if(mysqli_connect_errno()) {
      echo "connect here";
      $this->logger->invent_log('Could not connection to the database');
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