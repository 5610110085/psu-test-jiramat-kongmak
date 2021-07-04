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
    include('header.php');
?>

<div class="container">
    <br>
    <br>
</div>


<div class="container">
    <div class="card bg-gradient-light">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
            </h3>
            <!-- tools card -->
            <div class="card-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                    <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                </div>
                <button type="button" class="btn btn-light btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-light btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%">
                <div class="bootstrap-datetimepicker-widget usetwentyfour">
                    <ul class="list-unstyled">
                    <li class="show">
                        <div class="datepicker">
                            <div class="datepicker-days">
                                <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th>
                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">July 2021</th>
                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th>
                                    </tr>
                                    <tr>
                                        <th class="dow">Su</th>
                                        <th class="dow">Mo</th>
                                        <th class="dow">Tu</th>
                                        <th class="dow">We</th>
                                        <th class="dow">Th</th>
                                        <th class="dow">Fr</th>
                                        <th class="dow">Sa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-action="selectDay" data-day="06/27/2021" class="day old weekend">27</td>
                                        <td data-action="selectDay" data-day="06/28/2021" class="day old">28</td>
                                        <td data-action="selectDay" data-day="06/29/2021" class="day old">29</td>
                                        <td data-action="selectDay" data-day="06/30/2021" class="day old">30</td>
                                        <td data-action="selectDay" data-day="07/01/2021" class="day">1</td>
                                        <td data-action="selectDay" data-day="07/02/2021" class="day">2</td>
                                        <td data-action="selectDay" data-day="07/03/2021" class="day active today weekend">3</td>
                                    </tr>
                                    <tr>
                                        <td data-action="selectDay" data-day="07/04/2021" class="day weekend">4</td>
                                        <td data-action="selectDay" data-day="07/05/2021" class="day">5</td>
                                        <td data-action="selectDay" data-day="07/06/2021" class="day">6</td>
                                        <td data-action="selectDay" data-day="07/07/2021" class="day">7</td>
                                        <td data-action="selectDay" data-day="07/08/2021" class="day">8</td>
                                        <td data-action="selectDay" data-day="07/09/2021" class="day">9</td>
                                        <td data-action="selectDay" data-day="07/10/2021" class="day weekend">10</td>
                                    </tr>
                                    <tr>
                                        <td data-action="selectDay" data-day="07/11/2021" class="day weekend">11</td>
                                        <td data-action="selectDay" data-day="07/12/2021" class="day">12</td>
                                        <td data-action="selectDay" data-day="07/13/2021" class="day">13</td>
                                        <td data-action="selectDay" data-day="07/14/2021" class="day">14</td>
                                        <td data-action="selectDay" data-day="07/15/2021" class="day">15</td>
                                        <td data-action="selectDay" data-day="07/16/2021" class="day">16</td>
                                        <td data-action="selectDay" data-day="07/17/2021" class="day weekend">17</td>
                                    </tr>
                                    <tr>
                                        <td data-action="selectDay" data-day="07/18/2021" class="day weekend">18</td>
                                        <td data-action="selectDay" data-day="07/19/2021" class="day">19</td>
                                        <td data-action="selectDay" data-day="07/20/2021" class="day">20</td>
                                        <td data-action="selectDay" data-day="07/21/2021" class="day">21</td>
                                        <td data-action="selectDay" data-day="07/22/2021" class="day">22</td>
                                        <td data-action="selectDay" data-day="07/23/2021" class="day">23</td>
                                        <td data-action="selectDay" data-day="07/24/2021" class="day weekend">24</td>
                                    </tr>
                                    <tr>
                                        <td data-action="selectDay" data-day="07/25/2021" class="day weekend">25</td>
                                        <td data-action="selectDay" data-day="07/26/2021" class="day">26</td>
                                        <td data-action="selectDay" data-day="07/27/2021" class="day">27</td>
                                        <td data-action="selectDay" data-day="07/28/2021" class="day">28</td>
                                        <td data-action="selectDay" data-day="07/29/2021" class="day">29</td>
                                        <td data-action="selectDay" data-day="07/30/2021" class="day">30</td>
                                        <td data-action="selectDay" data-day="07/31/2021" class="day weekend">31</td>
                                    </tr>
                                    <tr>
                                        <td data-action="selectDay" data-day="08/01/2021" class="day new weekend">1</td>
                                        <td data-action="selectDay" data-day="08/02/2021" class="day new">2</td>
                                        <td data-action="selectDay" data-day="08/03/2021" class="day new">3</td>
                                        <td data-action="selectDay" data-day="08/04/2021" class="day new">4</td>
                                        <td data-action="selectDay" data-day="08/05/2021" class="day new">5</td>
                                        <td data-action="selectDay" data-day="08/06/2021" class="day new">6</td>
                                        <td data-action="selectDay" data-day="08/07/2021" class="day new weekend">7</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            <div class="datepicker-months" style="display: none;">
                                <table class="table-condensed">
                                <thead>
                                    <tr>
                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th>
                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th>
                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month active">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            <div class="datepicker-years" style="display: none;">
                                <table class="table-condensed">
                                <thead>
                                    <tr>
                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th>
                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            <div class="datepicker-decades" style="display: none;">
                                <table class="table-condensed">
                                <thead>
                                    <tr>
                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th>
                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li class="picker-switch accordion-toggle"></li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- /.card-body -->
    </div>

</div>








<div class="container">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard2</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">dashboard2</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="far fa-chart-bar"></i>
                Interactive Area Chart
            </h3>

            <div class="card-tools">
                Real time
                <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="interactive" style="height: 300px; padding: 0px; position: relative;">
                <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 781px; height: 300px;" width="781" height="300"></canvas>
                <canvas class="flot-overlay" width="781" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 781px; height: 300px;"></canvas>
                <div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;">
                    <svg style="width: 100%; height: 100%;">
                        <g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <text x="28" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">0</text>
                            <text x="98.87192234848484" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">10</text>
                            <text x="173.7204071969697" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">20</text>
                            <text x="248.5688920454545" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">30</text>
                            <text x="323.4173768939394" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">40</text>
                            <text x="398.26586174242425" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">50</text>
                            <text x="473.11434659090907" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">60</text>
                            <text x="547.9628314393939" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">70</text>
                            <text x="622.8113162878788" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">80</text>
                            <text x="697.6598011363636" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">90</text>
                        </g>
                        <g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <text x="8.953125" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text>
                            <text x="1" y="218.2" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text>
                            <text x="1" y="167.4" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">40</text>
                            <text x="1" y="116.6" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">60</text>
                            <text x="1" y="65.8" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">80</text>
                            <text x="-6.953125" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">100</text>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <!-- /.card-body-->
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


