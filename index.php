

<?php
    include('header.php')
?>


<!--?php
    include('welcome.php')
?-->


<div class="container">
    <br>
    <br>
</div>

<div class="container">
    <div>
        <h2>ระบบตรวจสอบบุคคลเดินทางเข้าจังหวัดสงขลา</h2>
        <br>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">จำนวนคน</span>
                    <span class="info-box-number"> 10
                    <small>%</small>                    
                    </span>
                </div>
                
                <!-- /.info-box-content -->
            </div>
            
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">วันที่</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">เดือน</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">ปี</span>
                    <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
</div>
  

<div>
    <div class="container">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">ตารางข้อมูลของผู้ที่กรอกข้อมูลแล้ว</h2>
                            <a href="usertraveladdstart.php" class="btn btn-danger pull-right"><i class="fa fa-plus"></i> กรอกข้อมูลเข้าจังหวัดสงขลา</a>
                            <a href="usertraveladdend.php" class="btn btn-info pull-right"><i class="fa fa-plus"></i> กรอกข้อมูลออกจากจังหวัดสงขลา</a>
                        </div>
                        <?php
                        // Include config file
                        require_once "config.php";  //เชื่อมฐานข้อมูล
                        
                        // Attempt select query execution
                        $sql = "SELECT * FROM travel ORDER BY id_travel DESC"; //ชื่อตารางข้อมูล
                        if($result = $pdo->query($sql)){
                            if($result->rowCount() > 0){
                                echo '<table class="table table-bordered table-striped">';
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th> ID </th>";
                                            echo "<th> Picture (ภาพ) </th>";                                           
                                            echo "<th> Name (ชื่อ) </th>";
                                            echo "<th> Surname (นามสกุล) </th>";
                                            echo "<th> Phone Number (เบอร์โทร) </th>";
                                            echo "<th> check in (เข้าสงขลา) </th>";
                                            echo "<th> check out (ออกสงขลา) </th>";
                                            echo "<th> ข้อมูลการเดินทาง </th>";

                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    $i = 0;
                                    while($row = $result->fetch()){
                                        echo "<tr>";
                                            $i++;
                                            echo "<td>" . $i . "</td>";
                                            echo "<td>" . $row['picture'] . "</td>";                                            
                                            echo "<td>" . $row['fname_travel'] . "</td>";                                                                                       
                                            echo "<td>" . $row['lname_travel'] . "</td>";
                                            echo "<td>" . $row['phone_number'] . "</td>";
                                            echo "<td>" . $row['date_start'] . "</td>";
                                            echo "<td>" . $row['date_end'] . "</td>";                                            

                                            echo "<td>";
                                                echo '<a href="readdatauser.php?id='. $row['id_travel'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                                
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
                        //unset($pdo);
                        ?>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    
</div>


<?php
    include('footer.php')
?>