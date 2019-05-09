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
$nivasi= mysqli_real_escape_string($con, $_POST['nivasi']);
$audhyogik= mysqli_real_escape_string($con, $_POST['audhyogik']);
$vanijya= mysqli_real_escape_string($con, $_POST['vanijya']);

$user_registration_query= "UPDATE bharankan SET nivasi='$nivasi', audhyogik='$audhyogik', vanijya='$vanijya' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for namuna9
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
  $notice_fee= mysqli_real_escape_string($con, $_POST['notice_fee']);
  $varant_fee= mysqli_real_escape_string($con, $_POST['varant_fee']);
  $dagdachi_rakkam= mysqli_real_escape_string($con, $_POST['dagdachi_rakkam']);

  $user_registration_query= "UPDATE namuna9 SET notice_fee='$notice_fee', varant_fee='$varant_fee', dagdachi_rakkam='$dagdachi_rakkam' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for divakar
$village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$o0to300d= mysqli_real_escape_string($con, $_POST['0to300d']);
$o301to700d= mysqli_real_escape_string($con, $_POST['301to700d']);
$o701tod= mysqli_real_escape_string($con, $_POST['701tod']);

$user_registration_query= "UPDATE divakar SET o0to300di='$o0to300d', o301to700di='$o301to700d', o701tosoondi='$o701tod' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for arogyakar
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$o0to300a= mysqli_real_escape_string($con, $_POST['0to300a']);
$o301to700a= mysqli_real_escape_string($con, $_POST['301to700a']);
$o701toa= mysqli_real_escape_string($con, $_POST['700toa']);

$user_registration_query= "UPDATE arogyakar	SET o0to300ak='$o0to300d', o300to700ak='$o301to700d', o701tosoonak='$o701tod' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for kg
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$o0to2kg= mysqli_real_escape_string($con, $_POST['0to2kg']);
$o3to5kg= mysqli_real_escape_string($con, $_POST['3to5kg']);
$o6to10kg= mysqli_real_escape_string($con, $_POST['6to10kg']);
$o11to20kg= mysqli_real_escape_string($con, $_POST['11to20kg']);
$o21to30kg= mysqli_real_escape_string($con, $_POST['21to30kg']);
$o31to40kg= mysqli_real_escape_string($con, $_POST['31to40kg']);
$o41to50kg= mysqli_real_escape_string($con, $_POST['41to50kg']);
$o51to60kg= mysqli_real_escape_string($con, $_POST['51to60kg']);
$o60ypjkg= mysqli_real_escape_string($con, $_POST['60ypjkg']);

$user_registration_query= "UPDATE kg SET o0to2y='$o0to2kg', o3to5y='$o3to5kg', o6to10y='$o6to10kg', o11to20y='$o11to20kg', o21to30y='$o21to30kg', o31to40y='$o31to40kg', o41to50y='$o41to50kg', o51to60y='$o51to60kg', o60ytosoon='$o60ypjkg' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for ap
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$o0to2ap= mysqli_real_escape_string($con, $_POST['0to2ap']);
$o3to5ap= mysqli_real_escape_string($con, $_POST['3to5ap']);
$o6to10ap= mysqli_real_escape_string($con, $_POST['6to10ap']);
$o11to20ap= mysqli_real_escape_string($con, $_POST['11to20ap']);
$o21to30ap= mysqli_real_escape_string($con, $_POST['21to30ap']);
$o31to40ap= mysqli_real_escape_string($con, $_POST['31to40ap']);
$o41to50ap= mysqli_real_escape_string($con, $_POST['41to50ap']);
$o51to60ap= mysqli_real_escape_string($con, $_POST['51to60ap']);
$o60ypjap= mysqli_real_escape_string($con, $_POST['60ypjap']);

$user_registration_query= "UPDATE ap SET o0to2y='$o0to2ap', o3to5y='$o3to5ap', o6to10y='$o6to10ap', o11to20y='$o11to20ap', o21to30y='$o21to30ap', o31to40y='$o31to40ap', o41to50y='$o41to50ap', o51to60y='$o51to60ap', o60ytosoon='$o60ypjap' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for mb
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$o0to2mb= mysqli_real_escape_string($con, $_POST['0to2mb']);
$o3to5mb= mysqli_real_escape_string($con, $_POST['3to5mb']);
$o6to10mb= mysqli_real_escape_string($con, $_POST['6to10mb']);
$o11to20mb= mysqli_real_escape_string($con, $_POST['11to20mb']);
$o21to30mb= mysqli_real_escape_string($con, $_POST['21to30mb']);
$o31to40mb= mysqli_real_escape_string($con, $_POST['31to40mb']);
$o41to50mb= mysqli_real_escape_string($con, $_POST['41to50mb']);
$o51to60mb= mysqli_real_escape_string($con, $_POST['51to60mb']);
$o60ypjmb= mysqli_real_escape_string($con, $_POST['60ypjmb']);

$user_registration_query= "UPDATE mb SET o0to2y='$o0to2mb', o3to5y='$o3to5mb', o6to10y='$o6to10mb', o11to20y='$o11to20mb', o21to30y='$o21to30mb', o31to40y='$o31to40mb', o41to50y='$o41to50mb', o51to60y='$o51to60mb', o60ytosoon='$o60ypjmb' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for ep
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$o0to2ep= mysqli_real_escape_string($con, $_POST['0to2ep']);
$o3to5ep= mysqli_real_escape_string($con, $_POST['3to5ep']);
$o6to10ep= mysqli_real_escape_string($con, $_POST['6to10ep']);
$o11to20ep= mysqli_real_escape_string($con, $_POST['11to20ep']);
$o21to30ep= mysqli_real_escape_string($con, $_POST['21to30ep']);
$o31to40ep= mysqli_real_escape_string($con, $_POST['31to40ep']);
$o41to50ep= mysqli_real_escape_string($con, $_POST['41to50ep']);
$o51to60ep= mysqli_real_escape_string($con, $_POST['51to60ep']);
$o60ypjep= mysqli_real_escape_string($con, $_POST['60ypjep']);

$user_registration_query= "UPDATE ep SET o0to2y='$o0to2ep', o3to5y='$o3to5ep', o6to10y='$o6to10ep', o11to20y='$o11to20ep', o21to30y='$o21to30ep', o31to40y='$o31to40ep', o41to50y='$o41to50ep', o51to60y='$o51to60ep', o60ytosoon='$o60ypjep' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for pg
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$o0to2pg= mysqli_real_escape_string($con, $_POST['0to2pg']);
$o3to5pg= mysqli_real_escape_string($con, $_POST['3to5pg']);
$o6to10pg= mysqli_real_escape_string($con, $_POST['6to10pg']);
$o11to20pg= mysqli_real_escape_string($con, $_POST['11to20pg']);
$o21to30pg= mysqli_real_escape_string($con, $_POST['21to30pg']);
$o31to40pg= mysqli_real_escape_string($con, $_POST['31to40pg']);
$o41to50pg= mysqli_real_escape_string($con, $_POST['41to50pg']);
$o51to60pg= mysqli_real_escape_string($con, $_POST['51to60pg']);
$o60ypjpg= mysqli_real_escape_string($con, $_POST['60ypjpg']);

$user_registration_query= "UPDATE pg SET o0to2y='$o0to2pg', o3to5y='$o3to5pg', o6to10y='$o6to10pg', o11to20y='$o11to20pg', o21to30y='$o21to30pg', o31to40y='$o31to40pg', o41to50y='$o41to50pg', o51to60y='$o51to60pg', o60ytosoon='$o60ypjpg' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for emaratvkar_dar_1_mulya
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$kgm= mysqli_real_escape_string($con, $_POST['kgm']);
$akm= mysqli_real_escape_string($con, $_POST['akm']);
$epm= mysqli_real_escape_string($con, $_POST['epm']);
$pm= mysqli_real_escape_string($con, $_POST['pm']);
$mm= mysqli_real_escape_string($con, $_POST['mm']);
$mkgm= mysqli_real_escape_string($con, $_POST['mkgm']);
$kjm= mysqli_real_escape_string($con, $_POST['kjm']);

$user_registration_query= "UPDATE emaratvkar_dar_1_mulya SET kgm='$kgm', akm='$akm', epm='$epm', pm='$pm', mm='$mm', mkgm='$mkgm', kjm='$kjm' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for emaratvkar_dar_2_kardar
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$kgkd= mysqli_real_escape_string($con, $_POST['kgkd']);
$akkd= mysqli_real_escape_string($con, $_POST['akkd']);
$epkd= mysqli_real_escape_string($con, $_POST['epkd']);
$pkd= mysqli_real_escape_string($con, $_POST['pkd']);
$mkd= mysqli_real_escape_string($con, $_POST['mkd']);
$mkgkd= mysqli_real_escape_string($con, $_POST['mkgkd']);
$kjkd= mysqli_real_escape_string($con, $_POST['kjkd']);

$user_registration_query= "UPDATE emaratvkar_dar_2_kardar SET kgkd='$kgkd', akkd='$akkd', epkd='$epkd', pkd='$pkd', mkd='$mkd', mkgkd='$mkgkd', kjkd='$kjkd' WHERE village_name='$village_name' ";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

  //for panikar
  $village_name= mysqli_real_escape_string($con, $_POST['village_name']);
$vae= mysqli_real_escape_string($con, $_POST['vae']);
$vpe= mysqli_real_escape_string($con, $_POST['vpe']);
$spp= mysqli_real_escape_string($con, $_POST['spp']);
$pnj= mysqli_real_escape_string($con, $_POST['pnj']);


$user_registration_query= "UPDATE panikar SET vae='$vae', vpe='$vpe', spp='$spp', pnj='$pnj' WHERE village_name='$village_name' ";
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
              New Values Village ADDED (UPDATED) Successfully.
            </h2></center>
        		<div class="container">
        			<center><button class="btn btn-default"> <a href="new_village.php" id="a1"><span class="glyphicon glyphicon-arrow-left"></span> Go Back to ADD NEW </a></button></center>
        		</div>
        		
        	</div>
        </div>
        </body>
        </html>