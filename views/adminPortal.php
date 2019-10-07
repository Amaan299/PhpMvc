<?php
include "../models/db.php";
include "header.php";


?>


<div class="panel panel-default">
    <div class="panel panel-heading">
        <h2>
            <a class="btn btn-success" href="add_hr.php">Add HR</a>
        </h2>

        <h2>
            <div class="well text-center">
                Welcome Admin
            </div>
        </h2>
        <h2>
            <div class="well text-center">
                Date:<?php echo  date(" Y-m-d")?>
            </div>
        </h2>


        <div class="panel panel-body">
            <form action="index.php" method="POST">
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>HR Name</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Profile</th>
                        <th>Boss</th>
                        <th>Designation</th>

                    </tr>
                    <?php
                    $show = "SELECT * FROM employee";
                    $r = $conn->prepare($show);
                    $r->execute();
                    $count = 0;
                    while ($row = $r->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <tr>
                            <td> <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['emp_name']; ?>
                                <input type="hidden" value="<?php echo $row['emp_name'];?>" name="name[]">
                            </td>
                            <td> <?php echo $row['department']; ?>
                                <input type="hidden" value="<?php echo $row['department'];?>" name="department[]">
                            </td>
                            <td> <?php echo $row['salary']; ?>
                                <input type="hidden" value="<?php echo $row['salary'];?>" name="salary[]">
                            </td>
                            <td> <?php echo $row['profile']; ?>
                                <input type="hidden" value="<?php echo $row['profile'];?>" name="profile[]">
                            </td>
                            <td> <?php echo $row['boss']; ?>
                                <input type="hidden" value="<?php echo $row['boss'];?>" name="boss[]">
                            </td>
                            <td> <?php echo $row['designation']; ?>
                                <input type="hidden" value="<?php echo $row['designation'];?>" name="designation[]">
                            </td>

                        </tr>
                        <?php
                        $count++;
                    }
                    ?>
                </table>
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </form>

        </div>

    </div>
</div>

