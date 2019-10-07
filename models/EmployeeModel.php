<?php
class EmployeeModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function markTimeIn(){
        if(isset($_POST['save'])) {
            $timein = $_POST['timein'];
            $sql = "INSERT INTO time VALUES ('',''$timein','')";

            $query = $conn->prepare($sql);
            $query->execute();
        }
    }
    public function markTimeOut(){
        if(isset($_POST['save'])) {
            $timeout = $_POST['timeout'];
            $sql = "INSERT INTO time VALUES ('',''','$timeout')";

            $query = $conn->prepare($sql);
            $query->execute();
        }
    }

    public function viewAttendance(){
        if(isset($_POST['save'])) {
            $timeout = $_POST['timeout'];
            $sql = "SELECT * FROM time";

            $query = $conn->prepare($sql);
            $query->execute();
        }
    }
}
?>