<?php
class HrModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function addEmployee(){
        try {
            if(isset($_POST["submit"])){
                $sql = "INSERT INTO employee (emp_name, department, salary, profile, boss, designation)
        VALUES ('".$_POST["name"]."','".$_POST["department"]."','".$_POST["salary"]."','".$_POST["profile"]."','".$_POST["boss"]."','".$_POST["designation"]."')";
                $result = $conn->exec($sql);


                header("Location: index.php");
            }
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    public function deleteEmployee(){
        $emp_id=$_GET['id'];
        try {
            if(isset($_POST["submit"])){
                $sql = "DElETE FROM employee WHERE id= $emp_id";
                $result = $conn->exec($sql);
                header("Location: index.php");
            }
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    public function updateEmployee(){
        if(isset($_POST["submit"])) {
            $date = date("Y-m-d");
            $records = $conn->prepare("SELECT * FROM attend_records WHERE my_date = '$date'");

            $record_result = $records->execute();

            $num = $records->rowCount();

            if ($num!=0) {

                foreach ($_POST["attend_status"] as $id => $attend_status) {
                    $name = $_POST["name"][$id];
                    $department = $_POST["department"][$id];
                    $salary = $_POST["salary"][$id];
                    $profile = $_POST["profile"][$id];
                    $boss = $_POST["boss"][$id];
                    $designation = $_POST["designation"][$id];
                    $date = date("Y-m-d");

                    $sql = "UPDATE attend_records SET emp_name = '" . $_POST["name"][$id] . "', department = '" . $_POST["department"][$id] . "', salary = '" . $_POST["salary"][$id] . "',
            profile = '" . $_POST["profile"][$id] . "', boss = '" . $_POST["boss"][$id] . "' , designation = '" . $_POST["designation"][$id] . "', attendance = '" . $_POST["attend_status"][$id] . "' , my_date = '$date'
            WHERE my_date = '$date'";
                    $result = $conn->exec($sql);
                    if ($result) {
                        $update = 1;
                    }
                }
            } else {
                foreach ($_POST["attend_status"] as $id => $attend_status) {
                    $sql = "INSERT INTO attend_records (emp_name, department, salary, profile, boss, designation,attendance,my_date)
            VALUES ('" . $_POST["name"][$id] . "','" . $_POST["department"][$id] . "','" . $_POST["salary"][$id] . "','" . $_POST["profile"][$id] . "','" . $_POST["boss"][$id] . "','" . $_POST["designation"][$id] . "','" . $_POST["attend_status"][$id] . "','$date')";
                    $result = $conn->exec($sql);

                    if ($result) {
                        $flag = 1;
                    }
                }
            }
        }

    }

}
?>