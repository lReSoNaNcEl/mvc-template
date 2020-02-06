<?php
namespace modules;

class App {

    public static $styles = [
        'header',
        'footer'
    ];

    public static function showArray($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    public static function includeStyles() {
        foreach (self::$styles as $style) {
            echo "<link rel=\"stylesheet\" href=\"/static/css/{$style}.css\">";
        }
    }
}