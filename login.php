<?php

class Login {
    private $email;
    private $senha;
    private $nome;


    
    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email; 
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "teste@gmail.com" and $this->senha == '123456'){
            echo"Logado com sucesso! ";
        }else {
            echo "Login incorreto! ";
        }
    }

    
}
$senhaa = isset($_GET['senha']) ? $_GET['senha'] : '';
$emaill = isset($_GET['email']) ? $_GET['email'] : '';
$logar = new Login("$emaill","$senhaa","Samuel Pereira");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
echo "<br>";
echo $logar->getNome();


