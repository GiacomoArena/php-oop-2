<?php

  class Products{
    protected $food;
    protected $games;
    protected $size;
    protected $material;

    private $price;
    private $categories;
    private $description;
    


    public function __construct($_price, $_categories, $_description){
      $this-> price = $_price;
      $this-> categories = $_categories;
      $this-> description = $_description;
    }

    public function setPrice($_price){
      $this->price = $_price;
    }
    public function setCategories($_categories){
      $this->categories = $_categories;
    }
    public function setDescription($_description){
      $this->description = $_description;
    }


    public function getPrice(){
        return $this->price; 
    }
    public function getCategories(){
        return $this->categories; 
    }
    public function getDescription(){
        return $this->description; 
    }


  }


