<?php 
class InventLogger {
  private $filepath = '../invent.log';
  
  function __construct() {
    echo "invent logger instanciated";
    #nothing to do
  }
  
  function invent_log($message) {
    echo "here";
    $fh = fopen($this->filepath, 'w') or die("can't open file");
    fwrite($fh, date("Y-m-d H:i:s")." ".$message);
    fclose($fh);
  }
}
?>