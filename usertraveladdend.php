<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$ID_Passport = $picture = $phone_number = $fname_travel = $lname_travel = "";
$country_end = $province_end = $district_end = $sub_district_end = $date_end = "";
$ID_Passport_err = $pictre_err = $phone_number_err = $fname_travel_err = $lname_travel_err  = "";
$country_end_err = $province_end_err = $district_end_err = $sub_district_end_err = "";





// Processing form data when form is submitted กำลังประมวลผลข้อมูลแบบฟอร์มเมื่อส่งแบบฟอร์ม
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate ID_Passport
    $input_ID_Passport = trim($_POST["ID_Passport_form"]);
    if(empty($input_ID_Passport)){ //ถ้าเป็นค่าว่างให้ใส่ข้อมูล
        $ID_Passport_err = "Please enter a name.";
    } elseif(!ctype_digit($input_ID_Passport)){
        $ID_Passport_err = "Please enter a ID Passport.(ป้อนเฉพาะตัวเลข)";        
    } else{
        $ID_Passport = $input_ID_Passport;
    }   
   

    // Validate phone_number
    $input_phone_number = trim($_POST["phone_number_form"]);  //trim ตัดช่องว่าง
    if(empty($input_phone_number)){
        $phone_number_err = "Please enter an address.";
    }elseif(!ctype_digit($input_phone_number)){
        $phone_number_err = "Please enter a phone numbers.(กรูณาป้อนตัวเลขมือถือ)";
    } else{
        $phone_number = $input_phone_number;
    }
    
    $input_fname_travel = trim($_POST["fname_travel_form"]);
    $fname_travel = $input_fname_travel;

    $input_lname_travel = trim($_POST["lname_travel_form"]);
    $lname_travel = $input_lname_travel;

    $input_country_end = trim($_POST["country_end_form"]);
    $country_end = $input_country_end;

    $input_province_end = trim($_POST["province_end_form"]);
    $province_end = $input_province_end;

    $input_district_end= trim($_POST["district_end_form"]);
    $district_end= $input_district_end;

    $input_sub_district_end= trim($_POST["sub_district_end_form"]);
    $sub_district_end = $input_sub_district_end;

    date_default_timezone_set("Asia/Bangkok");
    $date_end = date("Y-m-d h:i:sa");



    // Check input errors before inserting in database ตรวจสอบข้อผิดพลาดของอินพุตก่อนแทรกลงในฐานข้อมูล
    if(empty($ID_Passport_err) && empty($phone_number_err)){
        // Prepare an insert statement เตรียมคำสั่งแทรก
        $sql = "INSERT INTO travel (ID_Passport, phone_number, fname_travel, lname_travel, country_end, province_end, district_end, sub_district_end, date_end) VALUES (:ID_Passport, :phone_number, :fname_travel, :lname_travel, :country_end, :province_end, :district_end, :sub_district_end, :date_end)";
 
        if($stmt = $pdo->prepare($sql)){ //เตรียมคำสั่งสำหรับการดำเนินการและส่งกลับคำสั่ง object
            // Bind variables to the prepared statement as parameters ผูกตัวแปรกับคำสั่งที่เตรียมไว้เป็นพารามิเตอร์ **ทำตัวแปรให้ตรงกับหัวในตาราง
            $stmt->bindParam(":ID_Passport", $param_ID_Passport);
            //$stmt->bindParam(":picture", $param_picture);
            $stmt->bindParam(":phone_number", $param_phone_number);
            $stmt->bindParam(":fname_travel", $param_fname_travel);
            $stmt->bindParam(":lname_travel", $param_lname_travel);
            $stmt->bindParam(":country_end", $param_country_end);
            $stmt->bindParam(":province_end", $param_province_end);
            $stmt->bindParam(":district_end", $param_district_end);
            $stmt->bindParam(":sub_district_end", $param_sub_district_end);
            $stmt->bindParam(":date_end", $param_date_end);

            // Set parameters
            $param_ID_Passport = $ID_Passport;
            //$param_picture = $picture;
            $param_phone_number = $phone_number;
            $param_fname_travel = $fname_travel;
            $param_lname_travel = $lname_travel;
            $param_country_end = $country_end;
            $param_province_end = $province_end;
            $param_district_end = $district_end;            
            $param_sub_district_end = $sub_district_end;
            $param_date_end = $date_end;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
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
    <ID_Passport>Create Record</ID_Passport>
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
                            <input type="text" name="ID_Passport_form" class="form-control <?php echo (!empty($ID_Passport_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ID_Passport; ?>" placeholder="ID card">
                            <span class="invalid-feedback"><?php echo $ID_Passport_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Passport Image (ภาพถ่ายบัตรประชาชน)</label>
                            <input type="file" name="picture_form" class="form-control" value="<?php echo $picture; ?>" placeholder="Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.">
                        </div>
                        <div class="form-group">
                            <label>Phone Numer (เบอร์โทร)</label>
                            <input type="text" name="phone_number_form" class="form-control <?php echo (!empty($phone_number)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone_number; ?>" placeholder="Phone Numer (เบอร์โทร) Ex. 085-0705XXX">
                            <span class="invalid-feedback"><?php echo $phone_number_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Name (ชื่อ)</label>
                            <input type="text" name="fname_travel_form" class="form-control" value="<?php echo $fname_travel; ?>" placeholder="Name (ชื่อ)">
                            
                        </div>
                        <div class="form-group">
                            <label>Surname (นามสกุล)</label>
                            <input type="text" name="lname_travel_form" class="form-control" value="<?php echo $lname_travel; ?>" placeholder="Surname (นามสกุล)">
                            
                        </div> 
                        <div class="form-group">
                            <label>Country (ประเทศ)</label>
                            <input type="text" name="country_end_form" class="form-control" value="<?php echo $country_end; ?>" placeholder="Come From Country (มาจากประเทศ)">
                            
                        </div>
                        <div class="form-group">
                            <label>Province (จังหวัด)</label>
                            <input type="text" name="province_end_form" class="form-control"  value="<?php echo $province_end; ?>" placeholder="Province (จังหวัด)">
                            
                        </div>
                        <div class="form-group">
                            <label>District (อำเภอ)</label>
                            <input type="text" name="district_end_form" class="form-control" value="<?php echo $district_end; ?>" placeholder="District (อำเภอ)">
                            
                        </div>
                        <div class="form-group">
                            <label>Sub-District (ตำบล)</label>
                            <input type="text" name="sub_district_end_form" class="form-control" value="<?php echo $sub_district_end; ?>" placeholder="Sub-District (ตำบล)">
                        </div>                                              

                        <input type="submit" class="btn btn-primary" value="Upload">
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



