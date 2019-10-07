<?php
//require '../libs/Controller.php';
class CeoController extends Controller {
    public function __construct()
    {
        parent::__construct();
        //echo "CEO Controller";
        include "../views/login.php";
    }
    public function addHr(){
        $this->model.$this->addHr();
    }
    public function deleteHr(){
        $this->model.$this->deleteHr();
    }
    public function updateHr(){
        $this->model.$this->updateHr();
    }
    public function viewHr(){
        $this->model.$this->viewHr();
    }
}
?>