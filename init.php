<?php
define(ROOT, $_SERVER['DOCUMENT_ROOT']);

$modules = [
    'App',
    'Router',
    'Controller'
];

foreach ($modules as $module) {
    require("{$ROOT}/modules/{$module}.php");
}
