<?php
class Model{
    function __construct()
    {

        $servername = "localhost";
        $username = "root";
        $password = "amans299";
        try
        {
            $conn=new PDO("mysql:host=$servername;dbname=Attendance",$username,$password);
        } catch (PDOException $ex) {
            echo 'Exception'.$ex->getMessage();
        }
    }
}
?>