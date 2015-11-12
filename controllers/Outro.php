<?php
class Outro extends CI_Controller {
    public function ola(){  // nome da funcao na rota
        $this->load->view('abacaxi');
    }
    
    public function teste(){
	echo $this->session->userdata("_ID");
    }
    // session container de usuarios, para criar crud
    public function sess(){
    	$this->session->set_userdata("_ID","123");  // valor 123 dessa session
    	echo "Session setada com sucesso";
    }
    
}