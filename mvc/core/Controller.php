<?php
class Controller{

    public function model($name){
        require_once "./mvc/models/".$name.".php";
        return new $name;
    }
    public function view($name, $data = []){
        require_once "./mvc/views/".$name.".php";
    }
}