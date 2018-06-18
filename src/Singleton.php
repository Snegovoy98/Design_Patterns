<?php
/**
 * Created by PhpStorm.
 * User: sanya
 * Date: 18.06.18
 * Time: 20:05
 */

namespace App\DesingPatterns;


 final class Singleton
{
    private static $instance;
  private function __construct()
  {

  }

     public function getInstance()
     {
         if(null===self::$instance){
             self::$instance = new self();
         }
  }

     public function __toString()
     {
         return "objetc Id:". \spl_object_id($this);
  }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function _wakeup(){

    }
 }
 $s1 = Singleton::getInstance();
