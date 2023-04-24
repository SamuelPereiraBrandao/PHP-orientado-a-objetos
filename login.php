<?php

class Login {
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email; 
    }

    public function setEmail($e){
        $this->email = $e;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "teste@gmail.com" and $this->senha == '123456'){
            echo"Logado com sucesso!";
        }else {
            echo "Login incorreto! ";
        }
    }

    
}

$logar = new Login();
$logar->email = 'teste@gmail.com';
$logar->senha = '123456';

$logar->Logar();
