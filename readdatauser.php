
<?php
// Include config file
require_once "config.php";  //เชื่อมฐานข้อมูล
?>



<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM travel WHERE id_travel = :id"; //จะแสดงข้อมูลที่ตรงกับ PID ที่ได้จาก id เท่านั้น
    
    if($stmt = $pdo->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":id", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = $stmt->fetch(PDO::FETCH_ASSOC); //ส่งค่ากลับ array index โดยใช้ชื่อ column ในตาราง
                
                // Retrieve individual field value ดึงค่าแต่ละฟิลด์
                $fname_travel = $row["fname_travel"];
                $lname_travel = $row["lname_travel"];
                $country_start = $row["country_start"];

                
                //$project_title = $row2["project_title"];
                //$project_budget = $row2["project_budget"];
                //$project_year = $row2["project_year"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: errorpage.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    unset($stmt);
    
    // Close connection
    unset($pdo);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: projecterror.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
    <?php
        include('header.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="container">
                    <h1 class="mt-5 mb-3"><b>ข้อมูลการเข้า-ออกในแต่ละครั้ง</b></h1>
                    <div class="form-group">
                        <h5>  ID Passport (เลขบัตรประชาขน) </h5>
                        <p><b> - <?php echo $row["ID_Passport"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <h5> Phone Number (หมายเลขโทรศัพท์) </h5>
                        <p><b> - <?php echo $row["phone_number"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <h5> Name - Surname (ชื่อ-นามสกุล) </h5>
                        <p><b> - <?php echo $row["fname_travel"] ?></b></p>
                    </div>
                    <div class="form-group">
                        <h5> Surname (นามสกุล) </h5>
                        <p><b> - <?php echo $row["lname_travel"]; ?></b></p>
                    </div>
                    
                    <div class="form-group">
                        <h5> Come From (มาจาก) </h5>
                        <p><b> - ประเทศ : <?php echo $row["country_start"]; ?></b></p>
                        <p><b> - จังหวัด : <?php echo $row["province_start"]; ?></b></p>
                        <p><b> - อำเภอ : <?php echo $row["district_start"]; ?></b></p>
                        <p><b> - ตำบล : <?php echo $row["sub_district_start"]; ?></b></p>
                        <p><b> - วันและเวลา : <?php echo $row["date_start"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <h5> มากจาก </h5>
                        <p><b> - ประเทศ : <?php echo $row["country_end"]; ?></b></p>
                        <p><b> - จังหวัด : <?php echo $row["province_end"]; ?></b></p>
                        <p><b> - อำเภอ : <?php echo $row["district_end"]; ?></b></p>
                        <p><b> - ตำบล : <?php echo $row["sub_district_end"]; ?></b></p>
                        <p><b> - วันและเวลา : <?php echo $row["date_end"]; ?></b></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
    
</body>
    <?php
        include('footer.php');
    ?>
</html>