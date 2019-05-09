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

$select_query="SELECT * FROM thakbaki";
$select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="css/index.css" >
        <link rel="icon" href="img/rc-icon.png">
        <title>Clients Pending Tax</title>

    <style type="text/css">
        body{ font:  sans-serif; text-align: center; font-family: Roboto,Arial,Helvetica,sans-serif;}
        #con1{
        	margin-top: 20px;
        }
    </style>
    
</head>
<body>
	<div class="container" id="con1">
		<div class="row">
			<div class="col-sm-4">
				<a href="welcome.php" class="btn btn-default btn-lg">Back to Welcome-page</a>
			</div>
			<div class="col-sm-4">
				<a href="settings.php" class="btn btn-primary btn-lg">Go Back to Settings</a>
			</div>
			<div class="col-sm-4">
				<a href="thakbaki.php" class="btn btn-default btn-lg">Go back to Search Page</a>
			</div>
		</div>
	</div>
	<br>
	<br>
	

<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>घर क्र.</th>
				<th>गाव </th>
				<th>नाव</th>
				<th>थकीत घ.पट्टी</th>
				<th>चालू घ.पट्टी</th>
				<th>एकूण घ.पट्टी</th>
				<th>थकीत दिवाबत्ती</th>
				<th>चालू दिवाबत्ती</th>
				<th>एकूण दिवाबत्ती</th>
				<th>थकीत आ.कर</th>
				<th>चालू आ.कर</th>
				<th>एकूण आ.कर</th>
				<th>थकीत पाणीकर</th>
				<th>चालू पाणीकर</th>
				<th>एकूण पाणीकर</th>
				<th>नोटीस फी</th>
				<th>वारंट फी</th>
				<th>एकूण कर</th>
			</tr>
			<?php while($row = mysqli_fetch_array($select_query_result)) { ?>
			<tr>
				<td><?php echo $row['ghar_no']; ?></td>
				<td><?php echo $row['village_name']; ?></td>
				<td><?php echo $row['client_name']; ?></td>
				<td><?php echo $row['thak_gharpatti']; ?></td>
				<td><?php echo $row['chalu_gharpatti']; ?></td>
				<td><?php echo $row['ekun_gharpatti']; ?></td>
				<td><?php echo $row['thak_divabatti']; ?></td>
				<td><?php echo $row['chalu_divabatti']; ?></td>
				<td><?php echo $row['ekun_divabatti']; ?></td>
				<td><?php echo $row['thak_akar']; ?></td>
				<td><?php echo $row['chalu_akar']; ?></td>
				<td><?php echo $row['ekun_akar']; ?></td>
				<td><?php echo $row['thak_panikar']; ?></td>
				<td><?php echo $row['chalu_panikar']; ?></td>
				<td><?php echo $row['ekun_panikar']; ?></td>
				<td><?php echo $row['notice_fee']; ?></td>
				<td><?php echo $row['varant_fee']; ?></td>
				<td><?php echo $row['ekun_kar']; ?></td>
			</tr>
			<?php } ?>
		</thead>
		<tbody>
			
		</tbody>
	</table>
</div>
<?php $con->close(); ?>
	</body>
	</html>