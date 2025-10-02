<?php

require "models/Model.php";
require "views/View.php";
require "controllers/Controller.php";


$model = new Model();
$controller = new Controller($model);
$view = new View($model);


if (isset($_GET['action']) && $_GET['action'] == "update") {
    $controller->changeMessage();
}


echo $view->output();
echo '<a href="?action=update">Changer le message</a>';
