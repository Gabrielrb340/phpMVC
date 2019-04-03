<?php

namespace App\Controllers;

use App\Models\Entidades\Usuario;
use App\Lib\Sessao;


class CadastroController extends Controller
{
    //gambiarra caso n ache o metodos sempre acha esse index favor colocar em todo controller 
    // esta configurado no app.php
    public function index()
    {
        $this->render('cadastro/Cadastro');
    }
    public function cadastrar(){
        $Usuario = new Usuario();
        $Usuario->setNome($_POST['nome']);
        $Usuario->setEmail($_POST['email']);
        $Usuario->setSenha(md5($_POST['senha']));


        Sessao::gravaFormulario($_POST);


        if($Usuario->verificarEmail($_POST['email'])){
            Sessao::gravaMensagem("Email existente");
            $this->redirect('/usuario/cadastro');
        }

        if($Usuario->Salvar($Usuario)){
            // $this->redirect('/usuario/sucesso');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
        }
    }
///teste
}