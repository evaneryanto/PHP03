<?php
class Animal 
{
  public $legs = 4;
  public $cold_blooded = "no";
  public $name = "";

  function __construct($name){
    $this->name = $name; 
  }

  function set_name($name){
    $this->name = $name;
  }

   function set_cold_blooded($blood){
    $this->cold_blooded = $blood;
  }

   function set_legs($legs){
    $this->legs = $legs;
  }

  function get_name(){
      return $this->name;
  }

  function get_blood(){
      return $this->cold_blooded;
  }

  function get_legs(){
      return $this->legs;
  }
  
}
?>