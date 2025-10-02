<?php

class View
{

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function output()
    {
        return "<p>" . $this->model->message . "</p>";
    }
}
