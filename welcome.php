<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <?php
        include('header.php');
    ?>
</head>
<body>
    <div class="container">
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>    
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-4">
        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='dashboard1.php'">Dashboard 1 </button>
        </div>
        <div class="col-md-4">
        <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='dashboard2.php'">Dashboard 2</button>
        </div>
        <div class="col-md-4">
        <button type="button" class="btn btn-warning btn-lg btn-block" onclick="window.location.href='dashboard3.php'">Dashboard 3</button>
        </div>
    </div>
</div>


   
</body>
<br>
<?php
    include('footer.php');
?>
</html>


