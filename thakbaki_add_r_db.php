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
header( 'Content-Type: text/html; charset=utf-8' ); 
$con = mysqli_connect("127.0.0.1","root","","rutuja computers gram") or die(mysqli_error($con));

//for thakbaki table in database to add records.
$ghar_no= mysqli_real_escape_string($con, $_POST['ghar_no']);
$village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$client_name= mysqli_real_escape_string($con, $_POST['client_name']);
$thak_gharpatti= mysqli_real_escape_string($con, $_POST['thak_gharpatti']);
$chalu_gharpatti= mysqli_real_escape_string($con, $_POST['chalu_gharpatti']);

$ekun_gharpatti= $thak_gharpatti + $chalu_gharpatti;

$thak_divabatti= mysqli_real_escape_string($con, $_POST['thak_divabatti']);
$chalu_divabatti= mysqli_real_escape_string($con, $_POST['chalu_divabatti']);

$ekun_divabatti= $thak_divabatti+$chalu_divabatti;

$thak_akar= mysqli_real_escape_string($con, $_POST['thak_akar']);
$chalu_akar= mysqli_real_escape_string($con, $_POST['chalu_akar']);

$ekun_akar= $thak_akar+$chalu_akar;

$thak_panikar= mysqli_real_escape_string($con, $_POST['thak_panikar']);
$chalu_panikar= mysqli_real_escape_string($con, $_POST['chalu_panikar']);

$ekun_panikar= $thak_panikar+$chalu_panikar;

$notice_fee= mysqli_real_escape_string($con, $_POST['notice_fee']);
$varant_fee= mysqli_real_escape_string($con, $_POST['varant_fee']);

$ekun_kar= mysqli_real_escape_string($con, $_POST['ekun_kar']);
 
 
 $user_registration_query= "INSERT INTO thakbaki(ghar_no, village_name, client_name, thak_gharpatti, chalu_gharpatti, ekun_gharpatti, thak_divabatti, chalu_divabatti, ekun_divabatti, thak_akar, chalu_akar, ekun_akar, thak_panikar, chalu_panikar, ekun_panikar, notice_fee, varant_fee, ekun_kar) values ('$ghar_no','$village_name','$client_name','$thak_gharpatti','$chalu_gharpatti','$ekun_gharpatti','$thak_divabatti','$chalu_divabatti','$ekun_divabatti','$thak_akar','$chalu_akar','$ekun_akar','$thak_panikar','$chalu_panikar','$ekun_panikar','$notice_fee','$varant_fee','$ekun_kar')";
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
                border: 1px solid transparent;
            }
            .navbar-default{
                padding: 10px 10px 10px 10px;
                box-shadow: 0px 0px 10px 0px;
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
              Thakbaki record Added Successfully.
            </h2></center>
        		<div class="container">
        			<center><button class="btn btn-default"> <a href="thakbaki.php" id="a1"><span class="glyphicon glyphicon-arrow-left"></span> Go Back to Edit Page </a></button></center>
        		</div>
        		
        	</div>
        </div>
        </body>
        </html>