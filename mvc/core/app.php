<?php
// xử lí thanh địa chỉ
    class App{
        protected $controller='Home';
        protected $action='SayHi';
        protected $params=[];
        function __construct ()
        {
            $arr = $this->UrlProcess();
            // Xử lí controller
            if(file_exists('./mvc/controllers/'.$arr[0].'.php')){
                $this->controller = $arr[0]; // lấy controller
                unset($arr[0]);
            }
            require_once ('./mvc/controllers/'.$this->controller.'.php'); // lấy mặc định controller Home
            $this->controller = new $this->controller;

            // xử lí action
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){ // kiểm tra xem hàm có ở trong thư mục home hoặc news hay không?
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }

            // Xử lí params
            $this->params = $arr?array_values($arr):[];
            call_user_func_array([$this->controller, $this->action], $this->params); // tạo biến có kiểu là controller,
            // chạy hàm tên là action với tham số truyền vào là params
        }
        function UrlProcess(){
            if(isset($_GET['url'])){
                return explode('/',filter_var(trim($_GET['url'],'/'))); // tách các kí tự đặc biệt
                
            }
        }
    }
?>