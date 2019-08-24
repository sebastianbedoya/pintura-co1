<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {


    function __construct(){
        parent::__construct()
        $this->load-
    }
	public function index()
	{
		$this->load->view('viewEmpleado');
    }
    public function login_usuario(){
        $login=$this->input-POST('login');
        $pass=$this->input-POST('pass');

        $result=$this->Model_usuario->consulta_usuario($login,$pass);
    }
}