<?php
namespace modules;

use modules\App;

class Controller {

    public function render($view, $data = null) {

        if ($view !== 'error') {
            require(ROOT . '/components/MetaData.php');
            App::includeStyles();
            require(ROOT . '/components/Header.php');
            require(ROOT . "/views/{$view}/{$view}.php");
            require(ROOT . '/components/Footer.php');
        }
        else {
            require(ROOT . '/components/MetaData.php');
            require(ROOT . "/views/{$view}/{$view}.php");
        }
    }
}