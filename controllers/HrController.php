<?php
//require '../libs/Controller.php';
class HrController extends Controller{
    public function __construct()
    {
        parent::__construct();
        echo "HR Controller";
    }
    public function addEmployee(){
        $this->model.$this->addEmployee();
    }
    public function deleteEmployee(){
        $this->model.$this->deleteEmployee();
    }
    public function updateEmployee(){
        $this->model.$this->updateEmployee();
    }
    public function viewEmployee(){
        $this->model.$this->viewEmployee();
    }
    public function updateAttend()
    {
    }
}
?>