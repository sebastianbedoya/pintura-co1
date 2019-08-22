<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejer456 extends CI_Controller {


	public function index()
	{
		$this->load->view('viewEjercios');
  	}
  	public function ejercio4(){
  	$valor=rand(1,50);
	$primo=0
    for($b = 1;$b < $valor; $b++){
        if($valor % $b == 0){
            $primo++;
        }
    }
    if($primo >= 2 ){
        echo "No es primo";
    } else {
        echo "Es primo";
    }
    }
    public function ejercio5(){
    $contador=0;
    while($contador<26){
        $nota1=rand(1,5);
        $nota2=$nota1+$nota2
        $contador=$contador+1
    }
    $nota2/25;
    }
}