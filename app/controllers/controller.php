<?php 
namespace siteEtec\controllers;

class Controller
{
    public function __construct()
    {
        $this->view = new  \siteEtec\core\View();
    }
}