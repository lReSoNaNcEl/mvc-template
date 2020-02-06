<?php
namespace modules;

use modules\App;

class Controller {

    public function render($view, $data = null) {

        App::includeMetaData($data);

        if ($view !== 'error') {
            App::includeStyles($view);
            App::renderTemplate('default', $view);
        }
        else
            App::renderTemplate('error', $view);
    }
}