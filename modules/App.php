<?php
namespace modules;

class App {

    public static $styles = [
        'components' => [
            'header',
            'footer'
        ],
        'views' => [
            'main',
            'signup',
            'contacts'
        ]
    ];

    public static function getStyles() {
        return self::$styles;
    }

    public static function showArray($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    public static function includeStyles($view) {

        foreach (self::$styles['components'] as $style) {
            echo "<link rel=\"stylesheet\" href=\"/static/css/{$style}.css\">";
        }

        foreach (self::$styles['views'] as $style) {
            if ($view === $style)
                echo "<link rel=\"stylesheet\" href=\"/views/{$style}/{$style}.css\">";
        }
    }

    public static function includeMetaData($data) {
        require(ROOT . '/components/MetaData.php');
    }

    public static function renderTemplate($template, $view) {
        if ($template === 'default') {
            require(ROOT.'/components/Header.php');
            require(ROOT."/views/{$view}/{$view}.php");
            require(ROOT.'/components/Footer.php');
        }

        if ($template === 'error') {
            require(ROOT."/views/{$view}/{$view}.php");
        }
    }

}