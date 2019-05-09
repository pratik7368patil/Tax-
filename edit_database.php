<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
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
        <title>Rutuja Computers</title>
</head>
<body>
	<div class="container" style="text-align: left;">
		<h2><span class="glyphicon glyphicon-pencil"></span> Working on Database</h2>
		<hr>
	</div>
	<br>
	
	<div class="container">
		<div class="row">
		<div class="col-sm-2">
			<label>ग्रामपंचायतीचे नांव :</label>
			<input type="text" name="gram_name">
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label> गावाचे नांव :</label>
			<input type="text" name="village_name">
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id" disabled>
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no" disabled>
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success" disabled>Edit</button>
		</div>
		<div class="col-sm-2">
			<label>मालमत्ता धारकाचे नांव :</label>
			<input type="text" name="client_name">
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>धारकाच्या पत्नीचे नांव :</label>
			<input type="text" name="client_wife">
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label>भोगवटदाराचे नांव :</label>
			<input type="text" name="bhog_name">
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>मो.क्र. :</label>
			<input type="text" name="mobile_name">
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label>मिळकत क्रमांक :</label>
			<input type="text" name="milkat_no">
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>जागेचे मोजमाप :</label>
			<input type="text" name="plotcal">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label> लांबी :</label>
			<input type="text" name="lambi">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>रुंदी :</label>
			<input type="text" name="rundi">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label>एकूण :</label>
			<input type="text" name="total">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>पूर्वेस :</label>
			<input type="text" name="purves">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label>पश्चिमेस :</label>
			<input type="text" name="pachhimes">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>उत्तरेस :</label>
			<input type="text" name="uttares">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label>दक्षिणेस :</label>
			<input type="text" name="dakshines">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>वापरण्याची दिशा :</label>
			<input type="text" name="vapar_disha">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label>स.क्र./ग.क्र. :</label>
			<input type="text" name="sg_no">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>प्लॉट क्र. (पहिला ):</label>
			<input type="text" name="plot_no">
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label>जागेची चतुर्सिमा :</label>
			<input type="text" name="jagechi_chsima">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>शौचालय :</label>
			<input type="text" name="shau">
		</div>
		<div class="col-sm-2">
			<label>Mobile No:</label>
			<input type="text" name="mobile_no">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
		<div class="col-sm-2">
			<label>शेरा :</label>
			<input type="text" name="shera">
		</div>
		<div class="col-sm-2">
			<label>Client ID:</label>
			<input type="text" name="client_id">
		</div>
		<div class="col-sm-2">
			<br>
			<button class="btn btn-success">Edit</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label>प्लॉट क्र. (दुसरा ):</label>
			<input type="text" name="plot_no">
		</div>
		<div class="col-sm-2">
		<label>Client ID:</label>
		<input type="text" name="client_id">
		</div>
		<br>
		<button class="btn btn-success">Edit</button>
	</div>
	<br>
	<br>
	<br>

	</div>

<br>
<br>
<fieldset>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<label>Cliend ID:</label>
				<input type="text" name="client_id" disabled>
			</div>
			<div class="col-sm-2">
				<label>Cliend ID:</label>
				<input type="text" name="client_id" disabled>
			</div>
			<div class="col-sm-2">
				<br>
				<button class="btn btn-success" disabled>Edit</button>
			</div>
			<div class="col-sm-2">
				<label>मालमत्ता क्र.</label>
				<input type="text" name="malmatta_no">
			</div>
			<div class="col-sm-2">
				<label>Client ID:</label>
				<input type="text" name="client_id">
			</div>
			<div class="col-sm-2">
				<br>
				<button class="btn btn-success">Edit</button>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label>इमारत/जागेचा प्रकार</label>
				<input type="text" name="emarat_type">
			</div>
			<div class="col-sm-2">
				<label>Client ID:</label>
				<input type="text" name="client_id">
			</div>
			<div class="col-sm-2">
				<br>
				<button class="btn btn-success">Edit</button>
			</div>
			<div class="col-sm-2">
				<label>बांधकामाची लांबी</label>
				<input type="text" name="b_lambi">
			</div>
			<div class="col-sm-2">
				<label>Client ID:</label>
				<input type="text" name="client_id">
			</div>
			<div class="col-sm-2">
				<br>
				<button class="btn btn-success">Edit</button>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label>बांधकामाची रुंदी</label>
				<input type="text" name="b_rundi">
			</div>
			<div class="col-sm-2">
				<label>Client ID:</label>
				<input type="text" name="client_id">
			</div>
			<div class="col-sm-2">
				<br>
				<button class="btn btn-success">Edit</button>
			</div>
			<div class="col-sm-2">
				<label>बांधकाम क्षेत्रफळ</label>
				<input type="text" name="b_area">
			</div>
			<div class="col-sm-2">
				<label>Client ID:</label>
				<input type="text" name="client_id">
			</div>
			<div class="col-sm-2">
				<br>
				<button class="btn btn-success">Edit</button>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label>मजला क्षेत्र	</label>
				<input type="text" name="majala_ksh">
			</div>
			<div class="col-sm-2">
				<label>Client ID:</label>
				<input type="text" name="client_id">
			</div>
			<div class="col-sm-2">
				<br>
				<button class="btn btn-success">Edit</button>
			</div>
			<div class="col-sm-2">
				<label>बांधकाम वर्ष</label>
				<input type="text" name="b_year">
			</div>
			<div class="col-sm-2">
				<label>Client ID:</label>
				<input type="text" name="client_id">
			</div>
			<div class="col-sm-2">
				<br>
				<button class="btn btn-success">Edit</button>
			</div>
		</div>
		<br>
	<br>
	<br>
	</div>
</fieldset>
</body>
</html>