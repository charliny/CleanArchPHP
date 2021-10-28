<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page
{
    /**
     * Método responsavel por retornar o conteudo (view) da nossa Home
     */
    public static function getHome()
    {
        $content = View::render('pages/home', [
            'name' => 'Teste',
            'description' => 'Teste de view da home'
        ]);
        return parent::getPage('Teste do page', $content);
    }
}
