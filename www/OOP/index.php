<?php

  class Student
  {
    public $naam;
    public $lengte;

    public function toegang()
    {
      if ($this->lengte < 140) {
          return false;
      } else {
          return true;
      }
    }
  }

function vincent(){
$vincent = new Student();

$vincent->lengte;
}

echo $vincent->lengte(140);
?>
