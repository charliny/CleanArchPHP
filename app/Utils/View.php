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
     *@param string $view
     *@param array  $vars (string/numeric)
     */
    public static function render($view, $vars = [])
    {
        $contentView = self::getContentView($view);

        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);

        return str_replace($keys, array_values($vars), $contentView);
    }
}
