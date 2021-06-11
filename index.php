<?php

require 'vendor/autoload.php';
$f3 = \Base::instance();

$f3->route('GET /', function() {
    $view=new View;
    echo $view->render('routes/index.php');
    }
);

$f3->run();