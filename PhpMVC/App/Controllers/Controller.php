<?php

namespace App\Controllers;

use App\Lib\Sessao;

abstract class Controller
{
    protected $app;
    private $viewVar;

    public function __construct($app)
    {
        $this->setViewParam('nameController',$app->getControllerName());
    }

    public function render($view)
    {
        ///funcao para renderizar um arquivo view n precisa adicionar o ponto php
        $viewVar = $this->getViewVar();
        $Sessao  = Sessao::class;       
        require_once PATH . '/App/Views/' . $view . '.php';
    }

    public function redirect($view)
    {
        //tipo href
        header('Location: http://' . APP_HOST . $view);
        exit;
    }

    public function getViewVar()
    {
        return $this->viewVar;
    }

    public function setViewParam($varName, $varValue)
    {
        if ($varName != "" && $varValue != "") {
            $this->viewVar[$varName] = $varValue;
        }
    }
}