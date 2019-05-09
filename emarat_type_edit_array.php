<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<?php 
$con = mysqli_connect("127.0.0.1","root","","rutuja computers gram") or die(mysqli_error($con));

$client_id= mysqli_real_escape_string($con, $_POST['client_id']);
$unique_id= 'CLI0'.$client_id;
$malmatta_no= mysqli_real_escape_string($con, $_POST['malmatta_no']);
$building_type= mysqli_real_escape_string($con, $_POST['building_type']);
$building_l= mysqli_real_escape_string($con, $_POST['building_l']);
$building_w= mysqli_real_escape_string($con, $_POST['building_w']);
$building_area= mysqli_real_escape_string($con, $_POST['building_area']);
$building_maj= mysqli_real_escape_string($con, $_POST['building_maj']);
$b_vapar= mysqli_real_escape_string($con, $_POST['b_vapar']);
$building_year= mysqli_real_escape_string($con, $_POST['building_year']);

$user_registration_query= "UPDATE client_building SET unique_id='$unique_id', malmatta_no='$malmatta_no', emarat_type='$building_type', b_lambi='$building_l', b_rundi='$building_w', b_total_area='$building_area', majala_ksh='$building_maj', b_vapar='$b_vapar', b_year='$building_year' WHERE client_id='$client_id' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8_bin">
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rutuja Computers</title>

        <style type="text/css">
          #a1{
            text-decoration: none;
          }
          .btn-default{
            color: royalblue;
            background: white;
            border: 2px solid royalblue;
          }
          .btn-default:hover{
            background: black;
            border: 2px solid royalblue;
            color: white;
          }
          .navbar-default{
          	padding: 10px 10px 10px 10px;
          }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default" id="custom-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php" id="brand"><b>कर आकारणी तपशील </b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      <li>


                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Prints</b>
                         <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                    <li><a href="#"><b>Print for Client</b></a></li>
                    <li><a href="#"><b>Print for Records</b></a></li>
                        </ul>
                      </li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span><b> Contach Us</b></a></li>
                    </ul>
                      </div>
                </div>
        </nav>

        <div class="container">
        	<div class="jumbotron">
            <center><h2>
              Client's Property Information Updated Successfully.
            </h2></center>
        		<div class="container">
        			<center><button class="btn btn-default"> <a href="edit_db.php" id="a1"><span class="glyphicon glyphicon-arrow-left"></span> Go Back to Edit Page </a></button></center>
        		</div>
        		
        	</div>
        </div>
        </body>
        </html>