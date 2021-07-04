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
                <h1>Dashboard3</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">dashboard3</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    <!-- ./col -->
    </div>
</div>

<div class="container">
   <div class="card">
      <div class="card-header">
         <h3 class="card-title">Progress bars</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
         <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
               <span class="sr-only">40% Complete (success)</span>
            </div>
         </div>
         <div class="progress mb-3">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
               <span class="sr-only">20% Complete</span>
            </div>
         </div>
         <div class="progress mb-3">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
               <span class="sr-only">60% Complete (warning)</span>
            </div>
         </div>
         <div class="progress mb-3">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
               <span class="sr-only">80% Complete</span>
            </div>
         </div>
      </div>
      <!-- /.card-body -->
   </div>
   <!-- /.card -->
</div>

<div class="container">
    <h5 class="mt-4 mb-2">พื้นที่เฝ้าระวัง</h5>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-exclamation-triangle"></i>
                    จังหวัดที่ต้องระวัง 4 อันดับ
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
                    entire
                    soul, like these sweet mornings of spring which I enjoy with my whole heart.
                    </div>
                    <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    Info alert preview. This alert is dismissable.
                    </div>
                    <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                    Warning alert preview. This alert is dismissable.
                    </div>
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    Success alert preview. This alert is dismissable.
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-bullhorn"></i>
                    วิธีป้องกัน
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="callout callout-danger">
                    <h5>I am a danger callout!</h5>
                    <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                        soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.
                    </p>
                    </div>
                    <div class="callout callout-info">
                    <h5>I am an info callout!</h5>
                    <p>Follow the steps to continue to payment.</p>
                    </div>
                    <div class="callout callout-warning">
                    <h5>I am a warning callout!</h5>
                    <p>This is a yellow callout.</p>
                    </div>
                    <div class="callout callout-success">
                    <h5>I am a success callout!</h5>
                    <p>This is a green callout.</p>
                    </div>
                </div>
                <!-- /.card-body -->
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

