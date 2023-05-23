<?php

require_once __DIR__ . '/Products.php';

class Dog extends Products{
  protected $leash;
  protected $collar ;
  private $image;


  function __construct($_description, $_price, $_categories,  $_image){
    parent::__construct($_description, $_price, $_categories, );
    $this->setImage($_image);
  }

  public function setImage($_image){
    $this->image = $_image;
  }

  public function getImage(){
    return $this->image;
  }
}