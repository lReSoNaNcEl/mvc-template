<?php
namespace controllers;
use modules\Controller;

class MainController extends Controller {
    public function index() {

        parent::render('main', [
            'title' => 'Main Page',
        ]);
    }

    public function signup() {

        parent::render('signup', [
            'title' => 'Signup Page',
        ]);
    }

    public function contacts() {

        parent::render('contacts', [
            'title' => 'Contacts',
        ]);
    }

    public function error() {

        parent::render('error', [
            'title' => '404 Not Found',
        ]);
    }
}