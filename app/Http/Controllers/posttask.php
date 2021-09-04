<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posttask extends Controller
{
 
    public function Addition($x,$y){
  
        $result = $x + $y;
    	return $result;
    }

    public function Subtraction($x,$y){
  
        $result = $x - $y;
    	return $result;
    }

    public function Multiplication($x,$y){
  
        $result = $x * $y;
    	return $result;
    }

    public function Division($x,$y){
  
        $result = $x / $y;
    	return $result;
    }
}
