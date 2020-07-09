<?php
class Home extends Controller {
    function index(){
        $this->view('Share',['Page'=>'Home']);
    }


}

?>