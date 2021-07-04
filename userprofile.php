
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: auth/login.php");
    exit;
}
?>


<?php
    include('headeradmin.php')
?>
<div>
    <br>
    <br>
</div>




<div class="container">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">Employees Details no same project1</h2>
                            <a href="projectadd.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
                        </div>
                        <?php
                        // Include config file
                        require_once "config.php";  //เชื่อมฐานข้อมูล
                        
                        // Attempt select query execution
                        $sql = "SELECT * FROM useraccount ON ID = id_payment "; //ชื่อตารางข้อมูล
                        if($result = $pdo->query($sql)){
                            if($result->rowCount() > 0){
                                echo '<table class="table table-bordered table-striped">';
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th> ID </th>";
                                            echo "<th> Name </th>";
                                            echo "<th> Address </th>";
                                            echo "<th> Salary </th>";
                                            echo "<th> fname </th>";
                                            echo "<th> Action </th>";

                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    $i = 0;
                                    while($row = $result->fetch()){
                                        echo "<tr>";
                                            $i++;
                                            echo "<td>" . $i . "</td>";
                                            echo "<td>" . $row['project_title'] . "</td>";
                                            echo "<td>" . $row['project_budget'] . "</td>";
                                            echo "<td>" . $row['project_year'] . "</td>";                                                                                       
                                            echo "<td>" . $row['money_payment'] . "</td>";
                                            echo "<td>" . $row['id_payment'] . "</td>";
                                            

                                            echo "<td>";
                                                echo '<a href="project2read.php?id='. $row['project_title'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                                echo '<a href="projectupdate.php?id='. $row['PID'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                                echo '<a href="projectdelete.php?id='. $row['PID'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";                            
                                echo "</table>";
                                // Free result set
                                unset($result);
                                
                            } else{
                                echo '<div class="alert alert-danger"><em> ไม่พบการบันทึกข้อมูล </em></div>';
                            }
                        } else{
                            echo "Oops! Something went wrong. Please try again later. (ลองใหม่อีกครั้ง)";
                        }
                        
                        // Close connection
                        unset($pdo);
                        ?>
                    </div>
                </div>        
            </div>
        </div>
    </div>



<div class="contrainer">
    
</div>

<?php
    include('footer.php')
?>