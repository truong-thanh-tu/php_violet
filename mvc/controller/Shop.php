<?php
class Shop extends Controller {
    function  index(){
       $this->view('share',['Page'=>'Shop','File'=>'page']);
    }
    function detail_product(){
        $this->view('share',['Page'=>'Detail_product','File'=>'page']);
    }
    function checkout(){
        $this->view('share',['Page'=>'Checkout','File'=>'page']);
    }
    function shopping_cart(){
        $this->view('share',['Page'=>'Shopping_cart','File'=>'page']);
    }
}