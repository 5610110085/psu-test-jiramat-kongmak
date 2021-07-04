<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$title = $budget = $year = "";
$title_err = $budget_err = $year_err = "";
 
// Processing form data when form is submitted กำลังประมวลผลข้อมูลแบบฟอร์มเมื่อส่งแบบฟอร์ม
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_title = trim($_POST["titleform"]);
    if(empty($input_title)){ //ถ้าเป็นค่าว่างให้ใส่ข้อมูล
        $title_err = "Please enter a name.";
    } elseif(!filter_var($input_title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $title_err = "Please enter a valid name.";
    } else{
        $title = $input_title;
    }
    
    // Validate address
    $input_budget = trim($_POST["budgetform"]);  //trim ตัดช่องว่าง
    if(empty($input_budget)){
        $budget_err = "Please enter an address.";     
    } else{
        $budget = $input_budget;
    }
    
    // Validate salary
    $input_year = trim($_POST["yearform"]);
    if(empty($input_year)){
        $year_err = "Please enter the salary amount. กรอกข้อมูลพ่อหนุ่ม";
    } elseif(!ctype_digit($input_year)){
        $year_err = "Please enter a positive integer value.(ป้อนจำนวนเต็มบวก)";
    } else{
        $year = $input_year;
    }
    
    // Check input errors before inserting in database ตรวจสอบข้อผิดพลาดของอินพุตก่อนแทรกลงในฐานข้อมูล
    if(empty($title_err) && empty($budget_err) && empty($year_err)){
        // Prepare an insert statement เตรียมคำสั่งแทรก
        $sql = "INSERT INTO projects (project_title, project_budget, project_year) VALUES (:title, :budget, :year)";
 
        if($stmt = $pdo->prepare($sql)){ //เตรียมคำสั่งสำหรับการดำเนินการและส่งกลับคำสั่ง object
            // Bind variables to the prepared statement as parameters ผูกตัวแปรกับคำสั่งที่เตรียมไว้เป็นพารามิเตอร์ **ทำตัวแปรให้ตรงกับหัวในตาราง
            $stmt->bindParam(":title", $param_name);
            $stmt->bindParam(":budget", $param_address);
            $stmt->bindParam(":year", $param_salary);
            
            // Set parameters
            $param_name = $title;
            $param_address = $budget;
            $param_salary = $year;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: ../project.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.อ๊ะ! บางอย่างผิดพลาด. กรุณาลองใหม่อีกครั้งในภายหลัง";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>

<?php
    // Include config file
    require_once "config.php";  //เชื่อมฐานข้อมูล
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">เพิ่มข้อมูลการเดินทาง (เข้าจังหวัดสงขลา)</h2>
                    <p>กรุณากรอกแบบฟอร์มนี้และส่งเพื่อเพิ่มบันทึกลงในฐานข้อมูล</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Citizen ID/Passport (เลขบัตรประชาชน)</label>
                            <input type="text" name="titleform" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>" placeholder="">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Passport Image (ภาพถ่ายบัตรประชาชน)</label>
                            <input type="file" name="titleform" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>" placeholder="">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>                        
                        <div class="form-group">
                            <label>Name (ชื่อ)</label>
                            <input type="text" name="titleform" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>" placeholder="">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Surname (นามสกุล)</label>
                            <input type="text" name="titleform" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>" placeholder="">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>                        
                        <div class="form-group">
                            <label>Phone Numer (เบอร์โทร)</label>
                            <input type="text" name="yearform" class="form-control <?php echo (!empty($year_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $year; ?>" placeholder="Phone Numer (เบอร์โทร) Ex. 085-0705XXX">
                            <span class="invalid-feedback"><?php echo $year_err;?></span>
                        </div>
                       
                        <div class="form-group">
                            <label>Come From Country (มาจากประเทศ)</label>
                            <select class="custom-select" required>
                                <?php
                                    //require_once "config.php";
                                    $sql = "SELECT * FROM tbl_country"; //ชื่อตารางข้อมูล
                                    if($result = $pdo->query($sql)){
                                        if($result->rowCount() > 0){ 
                                            while($row = $result->fetch()){
                                                
                                                echo"<option>". $row['ct_nameENG'] ." ( " . $row['ct_nameTHA']. " ) ". "</option>";
                                                
                                            }
                                            //unset($result);
                                        }
                                    }
                                    //unset($pdo);
                                ?>
                            </select>
                            <span class="invalid-feedback"><?php echo $year_err;?></span>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">Province (จังหวัด)</label>                                
                                <select class="custom-select" required>
                                    <?php
                                        //require_once "config.php";
                                        $sql2 = "SELECT * FROM provinces"; //ชื่อตารางข้อมูล
                                        if($result2 = $pdo->query($sql2)){
                                            if($result2->rowCount() > 0){ 
                                                while($row2 = $result2->fetch()){
                                                    
                                                    echo"<option>". $row2['name_en'] ." ( " . $row2['name_th']. " ) ". "</option>";
                                                    
                                                }
                                                //unset($result);
                                            }
                                        }
                                        //unset($pdo);
                                    ?>
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">District (อำเภอ)</label>
                                <select class="custom-select" required>
                                    <?php
                                        //require_once "config.php";
                                        $sql3 = "SELECT * FROM amphures"; //ชื่อตารางข้อมูล
                                        if($result3 = $pdo->query($sql3)){
                                            if($result3->rowCount() > 0){ 
                                                while($row3 = $result3->fetch()){
                                                                                                 
                                                    echo"<option>". $row3['name_en'] ." ( " . $row3['name_th']. " ) ". "</option>";
                                                }
                                                //unset($result);
                                            }
                                        }
                                        //unset($pdo);
                                    ?>   
                                    
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Sub-District (ตำบล)</label>
                                <select class="custom-select" required>
                                    <?php
                                            //require_once "config.php";
                                            $sql4 = "SELECT * FROM districts"; //ชื่อตารางข้อมูล
                                            if($result4 = $pdo->query($sql4)){
                                                if($result4->rowCount() > 0){ 
                                                    while($row4 = $result4->fetch()){
                                                                                                    
                                                        echo"<option>". $row4['name_en'] ." ( " . $row4['name_th']. " ) ". "</option>";
                                                    }
                                                    //unset($result);
                                                }
                                            }
                                            //unset($pdo);
                                        ?>   
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <br><br><br><br>
</body>

<?php
    include('footer.php');
?>

</html>



