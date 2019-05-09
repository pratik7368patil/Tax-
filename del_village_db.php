<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php 
$con = mysqli_connect("127.0.0.1","root","","rutuja computers gram") or die(mysqli_error($con));

//for bharankan
$village_name= mysqli_real_escape_string($con, $_POST['village_name']);


$user_registration_query= "DELETE FROM bharankan WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for namuna9
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

  $user_registration_query= "DELETE FROM namuna9 WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for divakar
$village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM divakar WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for arogyakar
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM arogyakar WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for kg
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM kg WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for ap
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM ap WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for mb
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM mb WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for ep
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM ep WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for pg
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM pg WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for emaratvkar_dar_1_mulya
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM emaratvkar_dar_1_mulya WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for emaratvkar_dar_2_kardar
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM emaratvkar_dar_2_kardar WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for panikar
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);

$user_registration_query= "DELETE FROM panikar WHERE village_name='$village_name' ";
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
              Village DELETED Successfully.
            </h2></center>
        		<div class="container">
        			<center><button class="btn btn-default"> <a href="new_village.php" id="a1"><span class="glyphicon glyphicon-arrow-left"></span> Go Back to ADD NEW </a></button></center>
        		</div>
        		
        	</div>
        </div>
        </body>
        </html>