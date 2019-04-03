<?php

namespace App\Models\Entidades;

use App\Models\Repository\UsuarioRepository;
use App\Models\Repository\UsuarioRepository\UsuarioRepository as AppUsuarioRepository;



class Usuario
{
    private $id;
    private $nome;
    private $senha;
    private $email;

    public function getId()
    {
        return $this->id;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
    public function verificarEmail($email){
        $repository = new AppUsuarioRepository();
        $result = $repository->verificaEmail($email);
        if(sizeOf($result)>0){
            return true;
        }else {
            return false;
        }
    }
    public function Salvar(Usuario $Usuario){
        echo "<script>console.log('$Usuario');</script>";

    }
}