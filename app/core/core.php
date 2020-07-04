<?php 
namespace siteEtec\core;
class Core
{
    public function __construct()
    {
        $flag = false;
        //1. rotas
        if(isset($_GET['path']))
        {
            $token = explode('/', rtrim($_GET['path'], '/'));       
            // 2. Dispatcher
            $controllername = ucfirst(array_shift($token));
            //verifica se o arquivo existe na pasta controle
            if(file_exists('app/controllers/'.$controllername.'.php'))
            {
            $controllername = '\\siteEtec\\controllers\\'.$controllername;    
            $controller = new $controllername(); 
            // 2.1 Method
            if(!empty($token))
            {
                $actionName = array_shift($token);
                if(method_exists($controller, $actionName))
                {
                    $controller->{$actionName}{@$token};
                } 

            }else{
                //valor defaunt index
                $controller->index();
            }

        }else{
            // Se o controller não foi encontrado
            $flag = true;
            }
        }else{
            //NÃO TEM CONTROLADOR
            //CHAMA O ONTROLLER GENERICO
            $controllername = '\\siteEtec\\controllers\\HomeController';
            $controller = new $controllername();
            $controller->index(); 
        }

        //ERROR PAGE

        if($flag)
        {
            $controllername = '\\siteEtec\\core\\Page404';
            $controller = new $controllername();
            $controller->index(); 
        }
    }
}