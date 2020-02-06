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
}