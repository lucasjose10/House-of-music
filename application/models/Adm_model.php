<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_model extends CI_Model {

	public function __construct(){
		parent::__construct();

	}



  public function listar(){


    return $this->db->get('alunos')->result();

  }


}
