<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home
{
    /**
     * Método responsavel por retornar o conteudo (view) da nossa Home
     */
    public static function getHome(){
        return View::render('pages/home');
    }
}