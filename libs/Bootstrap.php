<?php
class Bootstrap{
    public function __construct()
    {
        $url = isset($_GET['url'])? $_GET['url']:null;
        $url = rtrim($url,'/');
        $url = explode('/',$url);


        if(empty($url[0])){
            require '../controllers/CeoController.php';
            $controller = new CeoController();
            return false;
        }

            $file = '../controllers/' . $url[0] . '.php';
            if(file_exists($file)){
                require $file;
            }
            else{
              echo "<h1>404</h1>";
            }
            $controller = new $url[0];


        if(isset($url[2])){
            $controller->{$url[1]}($url[2]);
        }
        else{
            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }
    }
}
?>