<?php 
namespace siteEtec\core;

class View
{
    public Function render($viewpath, $layout = null)
    {
        if($layout === null)
        {
            $this->view = $viewpath;   
            require_once 'app/views/layout.php';     
            
        }else if ($layout === false)
        {
            require_once 'app/views/'.$viewpath . '.php';
        }else {
            $this->view = $viewpath;
            require_once 'app/views/{$layout}.php';
        }
    }
}