#!/usr/bin/env php
<?php

namespace Lucasfreitasrocha\BuscadorCursos;

require_once 'vendor\autoload.php';
use Lucasfreitasrocha\BuscadorCursos\service\BuscarCursosSerivce;
use Lucasfreitasrocha\BuscadorCursos\service\CrawlerService;

$buscador = new BuscarCursosSerivce('https://www.alura.com.br/cursos-online-programacao/php', 'GET');
$response = $buscador->buscar();
$crawler = new CrawlerService($response->getBody());
$crawler->filterContent('span.card-curso__nome');
