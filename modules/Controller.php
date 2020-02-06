<?php
namespace modules;

use modules\App;

class Controller {

    public function render($view, $data = null) {
        require(ROOT.'/components/MetaData.php');

        App::includeStyles();

        require(ROOT.'/components/Header.php');
        require(ROOT."/views/{$view}.php");
        require(ROOT.'/components/Footer.php');
    }
}