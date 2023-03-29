<?php 
require_once "Assignment.php";
require_once "myAssignment.php";
class childAssignment extends Assignment {
    use MyAssignment;
    public $range;
  
    public function __construct($range=['stop'=>100,'start'=>0]) {
    $this->range= $range;
    }
}
?>