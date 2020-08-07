<?php

class AcessoInterno{

    public function sistemag7inner(){
        $this->db_user = 'root';
        $this->db_senha = '';
        $this->db_host = 'localhost';
        $this->db_name = 'sistemag7inner';
        $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_senha);
        $this->pdo = $pdo;
    }
    public function g7sistema(){
        $this->db_user = 'root';
        $this->db_senha = '';
        $this->db_host = 'localhost';
        $this->db_name = 'g7sistema';
        
        $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_senha);
        $this->pdo = $pdo;
    }
    public function sistemag7cond(){
        $this->db_user = 'root';
        $this->db_senha = '';
        $this->db_host = 'localhost';
        $this->db_name = 'sistemag7cond';
        
        $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_senha);
        $this->pdo = $pdo;
    }
    public function sistemag7emp(){
        $this->db_user = 'root';
        $this->db_senha = '';
        $this->db_host = 'localhost';
        $this->db_name = 'sistemag7emp';
        
        $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_senha);
        $this->pdo = $pdo;
    }
}
class AcessoExterno{

    public function sistemag7inner(){
        $this->db_user = 'sistemag7inner';
        $this->db_senha = 'g7811215';
        $this->db_host = 'sistemag7inner.mysql.dbaas.com.br';
        $this->db_name = 'sistemag7inner';
        $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_senha);
        $this->pdo = $pdo;
    }
    public function g7sistema(){
        $this->db_user = 'g7sistema';
        $this->db_senha = 'g7811215';
        $this->db_host = 'g7sistema.mysql.dbaas.com.br';
        $this->db_name = 'g7sistema';
        
        $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_senha);
        $this->pdo = $pdo;
    }
    public function sistemag7cond(){
        $this->db_user = 'sistemag7cond';
        $this->db_senha = 'g7811215';
        $this->db_host = 'sistemag7cond.mysql.dbaas.com.br';
        $this->db_name = 'sistemag7cond';
        
        $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_senha);
        $this->pdo = $pdo;
    }
    public function sistemag7emp(){
        $this->db_user = 'sistemag7emp';
        $this->db_senha = 'g7811215';
        $this->db_host = 'sistemag7emp.mysql.dbaas.com.br';
        $this->db_name = 'sistemag7emp';
        
        $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_senha);
        $this->pdo = $pdo;
    }
}

?>