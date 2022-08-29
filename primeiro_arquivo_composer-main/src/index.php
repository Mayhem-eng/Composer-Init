<?php

require '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('Olá Mundo!');
$logger -> pushHandler(new StreamHandler(__DIR__.'/App.log',Logger::DEBUG));

$logger -> info('Isto é uma String de Info');
$logger -> warning('Isto é um Warning');
$logger -> error('Essa é uma mensagem de Erro');

$variable = array(1,17,"hello world",null);
var_dump($variable);