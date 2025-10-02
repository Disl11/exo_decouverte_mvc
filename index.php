<?php

require "models/Model.php";
require "views/View.php";
require "controllers/Controller.php";


$model = new Model();
$controller = new Controller($model);
$view = new View($model);


if (isset($_GET['action'])) {
    if ($_GET['action'] == "update")
        $controller->changeMessage();
} elseif ($_GET['action'] == "reset") {
    $controller->resetMessage();
}



echo $view->output();
echo '<a href="?action=update">Changer le message</a><br>';
echo '<a href="?action=reset">Reset message </a><br>';
