<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejer123 extends CI_Controller {


	public function index()
	{
		$this->load->view('viewEjercios');
  }
  public function ejercio1(){
  
  $num1=$_POST['num1'];
  $num2=rand(1,50);
  if ($num1>$num2){
    echo 'el numero que digitaste es ',$num1, ' es mayor que ',$num2;
    
  }
  }
  public function ejercio2(){
  
    $num1=$_POST['num1'];
    $num2=rand(1,50);
    if ($num1>$num2){
      echo 'el numero que digitaste es ',$num1, ' es mayor que ',$num2;
      
  }
  }
  public function ejercio3(){
  
      $num1=rand(1,50);
      $num2=rand(1,50);
      $num3=rand(1,50);
      echo 'el numero es: ',$num1, ' el numero dos es: ',$num2, ' el numero dos es: ',$num3;
        
        
      
  }
  
     
}