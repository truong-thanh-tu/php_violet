<?php
class Shop extends Controller {
    function  index(){
       $this->view('share',['Page'=>'Shop']);
    }
    function detail_product(){
        $this->view('share',['Page'=>'Detail_product']);
    }
    function checkout(){
        $this->view('share',['Page'=>'Checkout']);
    }
    function shopping_cart(){
        $this->view('share',['Page'=>'Shopping_cart']);
    }
}