<?php

class Controller
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function changeMessage()
    {
        $this->model->message = "Message mis a jour grace au Controller !";
    }

    public function resetMessage()
    {
        $this->model->message = "Tu arriveras pas a me modifier !";
    }
}
