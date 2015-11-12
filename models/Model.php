<?php

    class Model extends CI_Model{
        
        public function insert(Usuario $u){
            $this->db->insert('Usuario',$u);    // Usuario é a tabela
        }
        
        public function searchAll(){
            $query = $this->db->query("Select * from Usuario");
            return $query->result();
        }
        
        public function getUser($nome,$pass){
            $this->db->where('nome',$nome);     // select from Usuario where nome=$nome
            $this->db->where('senha',$pass);    // select from Usuario where senha=$pass
            $a = $this->db->get('Usuario');
            if ($a->num_rows()>0){          // logica de autenticacao
                if ($a->row()->nome --- "root"){
                    return "admin";
                } else {
                    return "comum";
                }
            } else {
              return false;      
                }
        }
        
    }

?>