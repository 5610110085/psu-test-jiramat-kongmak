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
    include('header.php')
?>

<div class="container">
    <br>
    <br>
</div>


<div class="container">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard1</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">dashboard1</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container">   

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
                    <span class="info-box-text">วัน</span>
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

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Monthly Recap Report</h5>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a class="dropdown-divider"></a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                            </p>
                            <div class="chart">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <!-- Sales Chart Canvas -->
                                <canvas id="salesChart" height="180" style="height: 180px; display: block; width: 444px;" width="444" class="chartjs-render-monitor"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                    <!-- /.col -->
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Goal Completion</strong>
                            </p>
                            <div class="progress-group">
                                Add Products to Cart
                                <span class="float-right"><b>160</b>/200</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                Complete Purchase
                                <span class="float-right"><b>310</b>/400</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Visit Premium Page</span>
                                <span class="float-right"><b>480</b>/800</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                Send Inquiries
                                <span class="float-right"><b>250</b>/500</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                        </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
        <!-- ./card-body -->
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                <h5 class="description-header">$35,210.43</h5>
                                <span class="description-text">TOTAL REVENUE</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    <!-- /.col -->
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                <h5 class="description-header">$10,390.90</h5>
                                <span class="description-text">TOTAL COST</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    <!-- /.col -->
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                <h5 class="description-header">$24,813.53</h5>
                                <span class="description-text">TOTAL PROFIT</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    <!-- /.col -->
                        <div class="col-sm-3 col-6">
                            <div class="description-block">
                                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                <h5 class="description-header">1200</h5>
                                <span class="description-text">GOAL COMPLETIONS</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
        <!-- /.card-footer -->
            </div>
    <!-- /.card -->
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
                        <div class="container">
                            <div class="col-sm-12 col-md-6">
                                <div class="dt-buttons btn-group flex-wrap">
                                    <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                        <span>Copy</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                        <span>CSV</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                        <span>Excel</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                        <span>PDF</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                                        <span>Print</span>
                                    </button>
                                    <div class="btn-group">
                                        <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false">
                                            <span>Column visibility</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="example1_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                                </div>
                            </div>
                        </div>

                        <?php
                        // Include config file
                        require_once "config.php";  //เชื่อมฐานข้อมูล
                        
                        
                        $sql2 = "SELECT * FROM travel LIKE '%word%' OR detail LIKE '%word%' ORDER BY id_travel DESC";

                        // Attempt select query execution
                        $sql = "SELECT * FROM travel ORDER BY id_travel DESC "; //ชื่อตารางข้อมูล
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
                                                echo '<a href="deletedatauser.php?id='. $row['id_travel'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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









<div class="container">
    <br>
    <br>
</div>

<?php
    include('footer.php')
?>

