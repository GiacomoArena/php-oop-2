<?php

  class Products{
    public $food;
    public $price;
    public $games;
    public $kennels;
    public $categories;
    public $description;
    


    public function __construct($_price, $_categories, $_description){
      $this-> price = $_price;
      $this-> categories = $_categories;
      $this-> description = $_description;
    }
  }


