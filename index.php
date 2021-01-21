<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('main', 'DefaultController');
Router::get('seniorzy', 'DefaultController');
Router::get('inne_sekcje', 'DefaultController');
Router::get('basen', 'DefaultController');
Router::get('Kontakt', 'DefaultController');
Router::get('mecz1', 'DefaultController');
Router::get('mecz2', 'DefaultController');
Router::get('komentarz', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');

Router::run($path);