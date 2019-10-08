<?php
class EmployeeModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function markTimeIn(){
        if(isset($_POST['save'])) {

            $timein = $_POST['timein'];

            if($timein!=' '){
                $sql = "INSERT INTO `Attendance`.`my_time` (`timein`, `timeout`) VALUES ( '$timein', ' ')";
                $query = $conn->prepare($sql);

                $query->execute();
            }
        }
    }
    public function markTimeOut(){
        if(isset($_POST['save'])) {

            $timeout = $_POST['timeout'];

            if($timeout!=' '){
                $sql = "INSERT INTO `Attendance`.`my_time` (`timein`, `timeout`) VALUES ( ' ', '$timeout')";
                $query = $conn->prepare($sql);

                $query->execute();
            }
        }
    }

    public function viewAttendance(){
        if(isset($_POST['save'])) {

            $sql = "SELECT * FROM my_time";

            $query = $conn->prepare($sql);
            $query->execute();
        }
    }
}
?>