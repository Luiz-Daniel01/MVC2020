<?php

//configuração Banco de Dados Local
//define("HOST", "localhost");
//define("USER", "root");
//define("PASSWORD", "");
//define("DATABASE", "aula_bd3");
//@constante DATABASE Valores para conexao ao banco de dados em produção
define('DATABASE',[
'host' => 'den1.mysql5.gear.host',
'dbname' => 'bancobd3',
'user' => 'bancobd3',
'password' => 'QYq3t7HMx4Gy2Kz_',
'options' => [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_EMULATE_PREPARES, false
    ],
]);

define('ROOT', 'https://localhost/siteEtec/');
//define('ASSETS', '/app/views/assets/');
//timezone
//date_default_timezone_set('America/Sao_paulo');
//configuração Banco no 000WEBHOST
// define("HOST", "localhost");
// define("USER", "root");
// define("PASSWORD", "");
// define("DATABASE", "nome_banco");