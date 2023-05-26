<?php

namespace Lucasfreitasrocha\BuscadorCursos\service;

use GuzzleHttp\Client;
use Lucasfreitasrocha\BuscadorCursos\util\AcessProperties;
use Psr\Http\Message\ResponseInterface;

class BuscarCursosSerivce
{
    use AcessProperties;

    // https://www.alura.com.br/cursos-online-programacao/php
    private string $endpoint;
    // get
    private string $htppMethod;

    private $client;

    public function __construct(string $endpoint, string $htppMethod)
    {
        $this->endpoint = $endpoint;
        $this->htppMethod = $htppMethod;
        $this->client = new Client(['verify' => false]);
    }

    public function buscar(): ?ResponseInterface
    {
        return $this->client->request($this->htppMethod, $this->endpoint);
    }
}
