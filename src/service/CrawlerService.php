<?php

namespace Lucasfreitasrocha\BuscadorCursos\service;

use Symfony\Component\DomCrawler\Crawler;

class CrawlerService
{
    private $myCrawler;

    public function __construct(string $html)
    {
        $this->myCrawler = new Crawler($html);
    }

    public function filterContent($nameFilter)
    {
        $pathArquivo = 'cursos_alura_php.txt';
        $cursos = $this->myCrawler->filter($nameFilter);
        if (file_exists($pathArquivo)) {
            file_put_contents('cursos_alura_php.txt', '');
        }
        foreach ($cursos as $curso) {
            $nomeCurso = $curso->textContent . PHP_EOL;

            file_put_contents('cursos_alura_php.txt', $nomeCurso, FILE_APPEND);

            echo $nomeCurso;
        }
        // var_dump(array_map(function ($node) { return $node->textContet;}, get_object_vars($cursos) ));
        // var_dump($cursos);
    }
}
