<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Page
{


    /**
     * Método responsavel por renderizar o conteúdo do header
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }


    /**
     * Método responsavel por renderizar o conteúdo do footer
     * @return string
     */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }


    /**
     * Método responsavel por retornar o conteúdo (view) da nossa template
     * @return string
     */
    public static function getPage($title, $contet)
    {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $contet,
            'footer' => self::getFooter()
        ]);
    }
}
