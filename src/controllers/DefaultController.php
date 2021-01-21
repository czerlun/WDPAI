<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function main()
    {
        $this->render('main');
    }

    public function seniorzy()
    {
        $this->render('seniorzy');
    }

    public function inne_sekcje()
    {
        $this->render('inne_sekcje');
    }

    public function basen()
    {
        $this->render('basen');
    }

    public function Kontakt()
    {
        $this->render('Kontakt');
    }

    public function mecz1()
    {
        $this->render('mecz1');
    }

    public function mecz2()
    {
        $this->render('mecz2');
    }

    public function komentarz()
    {
        $this->render('mecz1');
    }
}