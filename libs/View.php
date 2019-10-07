<?php
class View {
    public function __construct()
    {
        //echo "This is My View<br />";
    }

    public function render($name){
        require_once '../views/' .$name . '.php';
    }

}
?>