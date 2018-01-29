<?php
    session_start();
    require_once('vendor/autoload.php');
    $f3 = Base::instance();

    $f3->set('colors', ['pink', 'green', 'blue']);

    $f3->route('GET /', function() {
        $view = new View;
        echo $view->render('views/home.html');
    });

    // $f3->route('GET /show/cat', function(){

    // echo '<img src="https://s7d1.scene7.com/is/image/PETCO/cat-category-090617-369w-269h-hero-cutout-d?fmt=png-alpha">';
    // });

    // $f3->route('GET /show/dog', function(){

    // echo '<img src="https://s7d1.scene7.com/is/image/PETCO/dog-category-090617-369w-269h-hero-cutout-d?fmt=png-alpha">';
    // });

    // $f3->route('GET /order', function() {
    //     $view = new View;
    //     echo $view->render('views/form1.html');
    // });
    // $f3->route('POST /order2', function() {
    //     $_SESSION['animal'] = $_POST['animal'];
    //     $view = new View;
    //     echo $view->render('views/form2.html');
    // });

    $f3->route('POST /results', function($f3) {
        $f3->set('name', $_POST['pet-name']);
        $f3->set('color', $_POST['pet-color']);
        $f3->set('animal', $_POST['pet-type']);
        echo Template::instance()->render('views/results.html');
    });

    $f3->route('GET|POST /new-pet', function($f3)
    {
        echo Template::instance()->render('views/new_pet_form.html');
    });

    $f3->run();