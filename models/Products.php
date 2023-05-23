<?php

  class Products{
    public $food;

    public $games;

    public $kennels;


    public function __construct($_food, $_games, $_kennels){
      $this-> food = $_food;
      $this-> games = $_games;
      $this-> kennels = $_kennels;
    }
  }


