<?php 
class InventLogger {
  private $filepath;
  function __construct($filepath) {
    $this->filepath = $filepath;
  }
  
  function invent_log($message) {
    echo $this->filepath;
    $fh = fopen($this->filepath, 'w') or die("can't open file");
    fwrite($fh, date("Y-m-d H:i:s")." ".$message);
    fclose($fh);
  }
}
?>