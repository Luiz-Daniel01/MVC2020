<?php
require_once "app/config.php";
require_once "autoload.php";
require_once "app/helpers.php";
//instanciar a classe do produto
//$prod = new siteEtec\models\Produto;//criando copia da class e jogando dentro da variavel.
//chamar função
//$prod->mensagem('Andar de Bicicleta é igual viver, uma hora você cai e se machuca');
//echo $prod->retornaMsg('Bicicleta é igual viver uma hora você cai e se machua');
//$prod->$msg();//chamando a variavel dentro da class.
//echo"<script>alert('retorno')</script>";
//explode tranforma string em array
//debug(explode('/', rtrim($_GET['path'], '/' )));
/*$string = 'paulo, vem tomando, vai de 4';
debug(explode(', ',$string));
$teste = (explode(', ',$string));
echo $teste[2];*/
/*debug($_GET['$teste']);
array_shift($_GET['$teste']);
debug($_GET['$teste']);*/

//starta a aplicação
new siteEtec\core\Core;
//oi
?>




