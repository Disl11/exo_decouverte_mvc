<?php

require "models/Model.php";
require "views/View.php";
require "controllers/Controller.php";


$model = new Model();
$controller = new Controller($model);
$view = new View($model);


if (isset($_GET['action'])) {
    if ($_GET['action'] == "update") {
        $controller->changeMessage();
    } elseif ($_GET['action'] == "reset") {
        $controller->resetMessage();
    } elseif ($_GET['action'] == "uppercase") {
        $controller->upperMessage();
    } elseif ($_GET['action'] == "delete") {
        $controller->deleteMessage();
    }
}



echo $view->output();
echo '<a href="?action=update">Changer le message</a><br>';
echo '<a href="?action=reset">Reset message </a><br>';
echo '<a href="?action=uppercase">Mettre en majuscule</a><br>';
echo '<a href="?action=delete">Suprimer le message</a><br>';

echo '<form method = "get">';
echo '<button type="submit"  name="action" value="update">Changer message </button>';
echo '</form>';
