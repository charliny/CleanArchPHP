<?php

namespace App\Utils;

class View
{

    /**
     * Método responsavel por retornar o conteúdo de uma view
     * @param string
     * @return string
     */
    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsavel por retornar o conteúdo renderizado de uma view
     */
    public static function render($view)
    {
        $contentView = self::getContentView($view);
        return $contentView;
    }
}
