<?php
class Contact extends Controller {
    function index(){
       $this->view('share',['Page'=>'Contact']);
    }
}