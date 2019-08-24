<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usuario extends CI_Model {

    function __construct(){
        parent::__construct()
    }

	public function index()
	{
		$this->load->view('viewEmpleado');
    }
    public function empleado1(){
        $email=$this->input-POST('login');
        $email=$this->input-POST('pass');

    }
}