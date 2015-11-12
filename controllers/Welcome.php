<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}
	
	public function teste(){
		$this->load->view('form');
	}
	
	public function teste2(){
		$this->load->view('page1');
	}
	
	public function getform(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');	// models/Model.php
		$m = $this->model;
		$m->insert(new Usuario($_POST["nome"]));	// cria obj usuario atraves dos dados inseridos no campo 'nome' obtidos no form-post (poderia ser get)
	}
	
	public function listar(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$usuarios = $m->searchAll();	// serachAll da select no banco
		$data ['usuarios'] = $usuarios; 	// array associativo, enchendo o data usuarios com $usuarios do banco
		// $data['outravar'] = 5;	// cada dado para ser enviado precisa do $data com a chave
		$this->load->view('lista',$data);
		
	}
}
