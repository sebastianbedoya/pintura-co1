<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejer456 extends CI_Controller {


	public function index()
	{
		$this->load->view('viewEjercios');
  	}
    public function ejercio6(){
    $contador=0;
    $estudiante=0;
    $nota2=0;
    while($contador<25){
        $nota1=rand(1,5);
        $nota2=$nota1+$nota2;
        $contador=$contador+1;
        $estudiante=$estudiante+1;
        echo "el estudiante=>" ,$estudiante, "  saco la nota: ",$nota1;
        echo "<br>";
    }
    $nota2=$nota2/25;
    echo $nota2;
    }
}