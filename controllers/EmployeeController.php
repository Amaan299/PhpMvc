<?php
//require '../libs/Controller.php';
class EmployeeController extends Controller {
    public function __construct()
    {
        parent::__construct();
        echo "Employee Controller";
    }
    public function markAttendance(){
        $this->model.$this->markAttendance();
    }
    public function viewAttendance(){
        $this->model.$this->viewAttendance();
    }
    public function validateMe(){
        $this->valid = new validate_user();
    }


}
?>
