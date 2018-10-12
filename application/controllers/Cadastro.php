<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct(){
		parent::__construct();

    $this->load->model('adm_model','modeladm');
    $this->info=$this->modeladm->listar();
	}

	public function index()
	{




		$dados['info']=$this->info;


		$this->load->view('back/template/html-headerlog');

    $this->load->view('back/template/cadastro');
		$this->load->view('back/template/html-footer');


	}


	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome','nome do aluno','required|is_unique[alunos.nome]');
		if($this->form_validation->run()== FALSE){
			$this->index();
		}
		else{
			



		}
	}


}
