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

//for gram table in database
$client_id= mysqli_real_escape_string($con, $_POST['client_id']);
$unique_id= 'CLI0'.$client_id;
$gram_name=  mysqli_real_escape_string($con, $_POST['gram_name']);
$village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$user_registration_query= "UPDATE gram SET gram_name='$gram_name', unique_id='$unique_id', village_name='$village_name' WHERE  client_id='$client_id' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

//for uni_client table in database
  $client_id=  mysqli_real_escape_string($con, $_POST['client_id']);
$user_registration_query= "UPDATE uni_client SET unique_id='$unique_id' WHERE  client_id='$client_id' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

//for clients table in database

$client_id= mysqli_real_escape_string($con, $_POST['client_id']);
$unique_id= 'CLI0'.$client_id;
$gram_name=  mysqli_real_escape_string($con, $_POST['gram_name']);
$village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$client_name= mysqli_real_escape_string($con, $_POST['client_name']);
$client_wife= mysqli_real_escape_string($con, $_POST['client_wife']);
$bhog_name= mysqli_real_escape_string($con, $_POST['bhog_name']);
$mobile_no= mysqli_real_escape_string($con, $_POST['mobile_no']);
$plot_no= mysqli_real_escape_string($con, $_POST['plot_no']);
$milkat_no= mysqli_real_escape_string($con, $_POST['milkat_no']);
$shau= mysqli_real_escape_string($con, $_POST['shau']);

$user_registration_query= "UPDATE clients SET  unique_id='$unique_id', gram_name='$gram_name', village_name='$village_name', client_name='$client_name', client_wife='$client_wife', bhog_name='$bhog_name', plot_no='$plot_no', mobile_no='$mobile_no', milkat_no='$milkat_no', shauchalay='$shau' WHERE client_id='$client_id' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for client_building_con table in database
  /* null for client_building_con*/

//for client_property table in database
$client_id= mysqli_real_escape_string($con, $_POST['client_id']);
$unique_id= 'CLI0'.$client_id;
$plotcal= mysqli_real_escape_string($con, $_POST['plotcal']);
$lambi= mysqli_real_escape_string($con, $_POST['lambi']);
$rundi= mysqli_real_escape_string($con, $_POST['rundi']);
$total= mysqli_real_escape_string($con, $_POST['total']);
$purves= mysqli_real_escape_string($con, $_POST['purves']);
$pachhimes= mysqli_real_escape_string($con, $_POST['pachhimes']);
$uttares= mysqli_real_escape_string($con, $_POST['uttares']);
$dakshines= mysqli_real_escape_string($con, $_POST['dakshines']);
$vapar_disha= mysqli_real_escape_string($con, $_POST['vapar_disha']);
$plot_no= mysqli_real_escape_string($con, $_POST['plot_no']);
$sg_no= mysqli_real_escape_string($con, $_POST['sg_no']);
$jagechi_chsima= mysqli_real_escape_string($con, $_POST['jagechi_chsima']);
 
 $user_registration_query= "UPDATE client_property SEt unique_id='$unique_id', plotcal='$plotcal', lambi='$lambi', rundi='$rundi', total='$total', purves='$purves', pachhimes='$pachhimes', uttares='$uttares', dakshines='$dakshines', vapar_disha='$vapar_disha', plot_no='$plot_no', sg_no='$sg_no', jagechi_chsima='$jagechi_chsima' WHERE client_id='$client_id' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

//for Documents in database
$client_id= mysqli_real_escape_string($con, $_POST['client_id']);
$shera = mysqli_real_escape_string($con, $_POST['shera']);

$user_registration_query= "UPDATE documents SET shera='$shera' WHERE client_id='$client_id' ";
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
              Client Updated Successfully.
            </h2></center>
        		<div class="container">
        			<center><button class="btn btn-default"> <a href="edit_db.php" id="a1"><span class="glyphicon glyphicon-arrow-left"></span> Go Back to Edit Page </a></button></center>
        		</div>
        		
        	</div>
        </div>
        </body>
        </html>