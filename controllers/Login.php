<?php
class Login extends CI_Controller {
    public function entrar(){
         $this->load->view("formlogin");
    }
    
    public function logout(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_NOME");
        echo "<h1>ATE LOGO</h1>";
    }
    
    public function page(){
        if($this->session->userdata("_NOME") != null){
            echo "<h1>PAGINA DE USUARIO</h1>";
        }else{
            redirect("/login/entrar");
        }
    }
    
    public function auth(){
        $nome = $_POST["nome"];
        $pass = $_POST["senha"];
        $this->load->model('model');
        $usr = $this->model->getUser($nome,$pass);
        if ($usr !== false){
            if ($user === "admin"){
                $this->session->set_userdata("_ID","admin");
                redirect("/login/admin");
            } else {
                $this->session->set_userdata("_ID","comum");
                $this->session->set_userdata("_NOME",$nome);
                redirect("/login/comum");
            }
        }
        /*
        if($nome === "root" && $pass === "root"){
            $this->session->set_userdata("_ID","admin");
            redirect("/login/admin");
        }else{
            $this->session->set_userdata("_ID","comum");
            $this->session->set_userdata("_NOME",$nome);
            redirect("/login/comum");
        } */
    }
    
    public function comum(){
        $nome = $this->session->userdata("_NOME");
        echo "<h1> Bem vindo ". $nome . " </h1>";
    }
    
    public function admin(){
        $a = $this->session->userdata("_ID");
        if($a === "admin"){
            echo "<h1> BEM-VINDO ADMIN </h1>";
        }else{
            echo "<h1> VOCE NAO ESTA AUTORIZADO PARA VER ESTA PAGINA </h1>";
        }
    }
    /* ----------------------------------
    Rota com as funcionalidades:
    > carregar view 'comumview', que mostra nome do user com link p/ logout
    > carregar view para visitante 'visitanteview', com link p/ logout
    */
    
    // https://ide.c9.io/romefeller/phpci
  
}
?>