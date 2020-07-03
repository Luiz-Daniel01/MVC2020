<?php 
namespace siteEtec\models;
//Classe é um MODELO, um exemplo, um modelo onde vc define valores, comportamentos e ações que essa Classe compartilha toda vez que é usada.

/*
returnMsg

@param String $msg
@return string
*/
class Produto
{
   public function __construct()
   {
      echo "<h1>Estou na classe Produto</h1>";
   }

   private function retornaMsg($msg)
   {
      return "Msg do dia -> $msg";
      //echo "Msg do dia -> $msg";
   }
   public function mensagem($msg)
   {
      echo $this->retornaMsg($msg);
   }


}
