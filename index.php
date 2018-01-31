<?php
/*
    Jacob Landowski
    Shahbaz Iqbal
    1-30-18
*/
    session_start();
    require_once('vendor/autoload.php');
    $f3 = Base::instance();

    $f3->set('colors', ['pink', 'green', 'blue']);

    $f3->route('GET /', function() {
        $view = new View;
        echo $view->render('views/home.html');
    });

    // $f3->route('POST /results', function($f3) {
    //     echo Template::instance()->render('views/results.html');
    // });

    $f3->route('GET|POST /new-pet', function($f3)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        { 
            $color = $_POST['pet-color'];
            $type  = $_POST['pet-type'];
            $name  = $_POST['pet-name'];

            include 'model/validate.php';

            $f3->set('success', $success);
            $f3->set('errors', $errors);
            $f3->set('color', $color);
            $f3->set('name', $name);
            $f3->set('type', $type);
        }
        echo Template::instance()->render('views/new_pet_form.html');
    });

    $f3->run();
