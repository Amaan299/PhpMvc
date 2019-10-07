<?php
class validate_user extends Model{
    public function __construct()
    {
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $designation = $_POST['designation'];
            $sql = "SELECT * FROM Attendance.my_user WHERE email = '$email' and password = '$password' and designation='$designation'";

            $query = $conn->prepare( $sql );
            $query->execute();

            if($query->rowCount() > 0 && $designation=='ceo'){
                header("Location: ../views/adminPortal.php");
            }
            else if($query->rowCount() > 0 && $designation=='hr'){
                header("Location: ../views/hrPortal.php");
            }
            else if($query->rowCount() > 0 && $designation=='developer'){
                header("Location: ../views/developer.php");
            }

        }
    }
}
?>