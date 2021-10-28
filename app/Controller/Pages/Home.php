<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Cardapio;

class Home extends Page
{
    /**
     * Método responsavel por retornar o conteudo (view) da nossa Home
     */
    public static function getHome()
    {
        $obCardapio = new Cardapio;

        $content = View::render('pages/home', [
            'name' => $obCardapio->name,
            'description' => $obCardapio->description
        ]);
        return parent::getPage('Teste do page', $content);
    }
}
