<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logado extends CI_Controller {

	public function __construct(){
		parent::__construct();

    $this->load->model('adm_model','modeladm');
    $this->info=$this->modeladm->listar();
	}

	public function index()
	{


    //$dados['info']=$this->info;




		$this->load->view('back/template/html-headerlog');
    $this->load->view('back/template/logado');
		$this->load->view('back/template/html-footer');


	}


}
