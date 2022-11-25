<?php

class Controller{
    public function view($show, $other = []){
        require_once '../app/views/' . $show .'.php';
    }
}