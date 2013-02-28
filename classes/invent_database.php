<?php 
class InventDatabase {
  private $username;
  private $password;
  private $db;
  private $mysqli;
  
  function __construct($username, $password, $db) {
    $this->username = $username;
    $this->password = $password;
    $this->db = $db;
    $this->connect();
  }
  
  function connect() {
    $this->mysqli = new mysqli('localhost', 'root', 'root', $this->db);
    if(mysqli_connect_errno()) {
      //Log Errores heres
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