<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        /// precisa ser mudado para pagina home , e validado caso usario nao estiver logado no session retorna a pagina de login
        $this->render('login/Login');
    }
}