
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

$user_registration_query= "insert into client_building(client_id, unique_id, malmatta_no, emarat_type, b_lambi, b_rundi, b_total_area, majala_ksh, b_year, b_vapar) values ('$client_id','$unique_id','$malmatta_no','$building_type','$building_l','$building_w','$building_area','$building_maj','$building_year','$b_vapar')";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

?>