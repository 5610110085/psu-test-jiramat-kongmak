<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$title = $budget = $year = "";
$title_err = $budget_err = $year_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate title
    $input_title = trim($_POST["titleform"]);
    if(empty($input_title)){
        $title_err = "Please enter a name.";
    } else{
        $title = $input_title;
    }
    
    // Validate address budget
    $input_budget = trim($_POST["budgetform"]);
    if(empty($input_budget)){
        $budget_err = "Please enter an address.";     
    } else{
        $budget = $input_budget;
    }
    
    // Validate year
    $input_year = trim($_POST["yearform"]);
    if(empty($input_year)){
        $year_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_year)){
        $year_err = "Please enter a positive integer value.";
    } else{
        $year = $input_year;
    }
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($budget_err) && empty($year_err)){
        // Prepare an update statement
        $sql = "UPDATE projects SET project_title=:title, project_budget=:budget, project_year=:year WHERE PID=:id";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":title", $param_title);
            $stmt->bindParam(":budget", $param_budget);
            $stmt->bindParam(":year", $param_year);
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_title = $title;
            $param_budget = $budget;
            $param_year = $year;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
                header("location: project.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM projects WHERE PID = :id";
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                    // Retrieve individual field value
                    $title = $row["project_title"];
                    $budget = $row["project_budget"];
                    $year = $row["project_year"];
                    
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: projecterror.php");
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
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: projecterror.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">อัพเดตข้อมูล</h2>
                    <p>Please edit the input values and submit to update the porject record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="titleform" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="budgetform" class="form-control <?php echo (!empty($budget_err)) ? 'is-invalid' : ''; ?>"><?php echo $budget; ?></textarea>
                            <span class="invalid-feedback"><?php echo $budget_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="yearform" class="form-control <?php echo (!empty($year_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $year; ?>">
                            <span class="invalid-feedback"><?php echo $year_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="project.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
