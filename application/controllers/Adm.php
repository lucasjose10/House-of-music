<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index()
	{


		$this->load->view('back/template/html-header');
		$this->load->view('back/template/html-footer');
		$this->load->view('back/template/admin/login');

	}


}
