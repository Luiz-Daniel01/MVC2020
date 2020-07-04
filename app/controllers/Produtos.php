<?php 
namespace siteEtec\controllers;

class Produtos extends Controller{
    
    public function index()
    {
        $this->view->mensagem = 'DADO VINDO DO BANCO';
        $this->view->render('produtos');
    }
}