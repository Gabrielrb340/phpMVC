<?php

namespace App\Controllers;

use App\Models\Entidades\Usuario;


class LoginController extends Controller
{
    public function index()
    {
        $this->render('login/Login');
    }
    public function login(){
        $Usuario = new Usuario();
        $Usuario->setNome($_POST['nome']);
        $Usuario->setSenha($_POST['senha']);
    }
}