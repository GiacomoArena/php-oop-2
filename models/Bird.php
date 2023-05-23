<?php

require_once __DIR__ . '/Products.php';

class Bird extends Products{
  protected $cages;
  protected $dispenser;
  private $image;


  function __construct($_price, $_categories, $_description, $_image){
    parent::__construct($_price, $_categories, $_description);
    $this->setImage($_image);
  }

  public function setImage($_image){
    $this->image = $_image;
  }

  public function getImage(){
    return $this->image;
  }
}