<?php 
namespace siteEtec\controllers;


class HomeController extends Controller{
    public function index()
    {
        $this->view->render('home');
    }
}