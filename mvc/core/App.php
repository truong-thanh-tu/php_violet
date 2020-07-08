<?php
class App{
    //http://localhost/php_violet/Home
    protected  $controller="Home";
    protected $action="index";
    protected $params=[];

    function __construct()
    {
        $arrs = $this->UrlProcess();
        // Xử lý controller
        // Kiểm tra và gán giá trị cho controller
       if(file_exists("./mvc/controller/".$arrs[0].".php")){
                $this->controller=$arrs[0];
                unset($arrs[0]);
        }
        require_once "./mvc/controller/".$this->controller.".php";
        // Xử lý action
        if(isset($arrs[1])){
            //Kiêm tra ham co tồn tại hai không.Nếu có thì trả về là true không có thì trả về là fale. Home đc lấy từ request_once
            if(method_exists($this->controller,$arrs[1])){
                $this->action=$arrs[1];
            }
            unset($arrs[1]);

        }
        // Xử lý params
        $this->params= $arrs?array_values($arrs):[];
        call_user_func_array([$this->controller,$this->action],$this->params);
    }
    // Xử lý đường truy cập
    function UrlProcess(){
        // Nếu có url thì trả nó về
        if(isset($_GET['url'])) {
            // Loại bỏ khoản trắng và check theo dấu '/'-> tao ra dữ liệu liệu sạch
           $url= filter_var(trim($_GET['url']));
            // Loại bỏ '/' và trả về url
            // trả về giá trị là mảng
            return explode('/',$url);
        }
    }

}

