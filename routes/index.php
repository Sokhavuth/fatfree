<?php
//routes/index.php

$f3->route('GET /', function(){
    $view = new View;
    echo $view->render('views/index.php');
});