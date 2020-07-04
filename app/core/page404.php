<?php 
namespace siteEtec\core;

class Page404{
    public function index()
    {

        $nome = 'Luiz';
        
        $conteudo = <<<ETEC
        <h1>Boa Noite {$nome}</h1>
        <h2>ERRO 404 - PÁGINA NÃO ENCONTRADA AMIGÃO, VAI DE 4 VEM DE COSTAS, SEQUÊNCIA DE VAPO, SEQUÊNCIA DE TOMA TOMA
        <div style="text-align: center">
        </div>
ETEC;
        echo $conteudo;
    }
}