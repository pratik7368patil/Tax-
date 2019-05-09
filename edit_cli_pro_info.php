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
        <link rel="icon" href="img/rc-icon.png">
        <title>Clients Pending Tax</title>

    <style type="text/css">
        body{ font:  sans-serif; text-align: center; padding-top: 30px;
            font-family: Roboto,Arial,Helvetica,sans-serif;
          }
        #con1{
            margin-top: 20px;
        }
        footer{
                
            background-color: whitesmoke;
            margin-top: 50px;
          }
          .fa{
            font-size: 20px;
            color: black;
            
          }
          .icon-bar{
            background: black;
          }
          #fr{
            padding: 10px 10px 10px 10px;
            color: royalblue;
          }
          #fc{
            border-right: 4px solid green;
          }
          #ff{
            color: white;
            padding-bottom: 20px;
          }
          #fd{
            color: black;
          }
          #fl:hover{
            text-decoration: none;
            color: green;
            border-bottom: 1px solid green;
          }
          .btn-primary,.btn-default{
            margin-bottom: 20px;
          
          }
          .jumbotron{
            background: #f3f5f9;
          }
          #li{
            padding: 45px 10px 45px 10px;
            border-left: 4px solid whitesmoke;
          }
          #li:hover{
            background: #F0FFF0;
            border-left: 4px solid royalblue;
          }
          #nli{
            text-decoration: none;
          }
           .btn-primary{
            background: white;
            color: royalblue;
            border: 2px solid royalblue;
           }
           .btn-primary:hover{
            background: whitesmoke;
            color: green;
           }

    </style>
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3 ]">
          <div class="row" id="li">
           <a href="thakbaki_pre_r.php" class="btn-lg" id="nli">ADD Previous Record</a>
         </div>
         <div class="row" id="li">
        <a href="#" class="btn-lg" id="nli">Edit Previous Record</a>
      </div>
      <div class="row" id="li">
        <a href="settings.php" class="btn-lg" id="nli">Back to Settings</a>
      </div>
    
        </div>
        <div class="col-sm-9">
	<div class="jumbotron">
		<form onsubmit="return false">
    <h3><b>इमारत / जागेचा कर आकारणीचा तपशील :</b></h3>
    <table id="myTable" class=" table order-list table-bordered">
    <thead>
        <tr>
            <td><b>Client ID :</b></td>
            <td><b>मालमत्ता क्र. </b></td>
            <td><b>इमारत/जागेचा प्रकार</b></td>
            <td><b>बांधकामाची लांबी</b></td>
            <td><b>बांधकामाची रुंदी</b></td>
            <td><b>बांधकाम क्षेत्रफळ</b></td>
            <td><b>मजला क्षेत्र</b></td>
            <td><b>इमारतीचा वापर</b></td>
            <td><b>बांधकाम वर्ष</b></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-1">
                <input type="text" name="unique_id" id="unique_id" class="form-control">
            </td>
            <td class="col-sm-1">
                <input type="text" name="malmatta_no" id="malmatta_no" class="form-control" value="1">
            </td>
            <td class="col-sm-2">
                
                <select id="building_type" class="form-control" name="building_type">
                <option> झोपडी, मातीचे घर (कच्चे घर) </option>
                <option> टिन पत्रे केलेल्या दगड विटांच्या भिंती (अर्धपक्के) </option>
                <option> स्लॅप विटांच्या भिंती, आर.सी.सी. (इतर पक्के)</option>
                <option> आर.सी.सी. पद्धतीची इमारत, ग्रेनाईटची इमारत (पक्के)</option>
                </select>

            </td>

            <td class="col-sm-1">
                <input type="text" name="building_l"  id="building_l" class="form-control"/>
            </td>

            <td class="col-sm-1">
                <input type="text" name="building_w"  id="building_w" class="form-control"/>
            </td>

            <td class="col-sm-1">
                <input type="text" name="building_area"  id="building_area" class="form-control"/>
            </td>

            <td class="col-sm-1">
                <select id="b_vapar" class="form-control" name="b_vapar">
                <option>पहिला मजला</option>
                <option>दुसरा मजला</option>
                <option>तिसरा मजला</option>
                <option></option>
                </select>
            </td>

            <td class="col-sm-1">
                <select id="building_maj" class="form-control" name="building_maj">
                <option> निवासी </option>
                <option> औद्योगिक </option>
                <option> वाणिज्यिक </option>
                </select>
            </td>

            <td class="col-sm-1">
                <input type="text" name="building_year" id="building_year" class="form-control"/>
            </td>

            <td colspan="col-sm-1">
                <button class="btn btn-primary" onclick="insertdata()">Insert</button>
            </td>

            <td class="col-sm-1"><a class="deleteRow"></a></td>

            
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6" style="text-align: left;">
                <input type="button" class="btn btn-success btn-block " id="addrow" value="Add Row" disabled>
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
</form>
	</div>
</div>
</div>
</div>
<footer>
    <div class="container">
      <center>
      <div class="row" id="fr">
        <h3>Some Shortcut Links</h3>
      </div>
      <hr id="hor">
      <div class="container">
      <div class="row" id="fr">
        <div class="col-md-4" id="fc">
          <h3 class="fa">Useful Links</h3>
          
          <div class="row">
            <h5><a href="welcome.php" id="fl">Back to Welcome Page</a></h5>
          </div>
          <div class="row">
            <h5><a href="all_client.php" id="fl">All Clients</a></h5>
          </div>
        </div>
        <div class="col-md-4" id="fc">
          <h3 class="fa">Prints</h3>
          <div class="row">
            <h5><a href="prints.php" id="fl">Prints For Reciept</a></h5>
          </div>
          <div class="row">
            <h5><a href="prints.php" id="fl">Prints For Client</a></h5>
          </div>
          <div class="row">
            <h5><a href="#top" id="fl">Go back to Top</a></h5>
          </div>
        </div>
        <div class="col-md-4">
          <h3 class="fa">Contact Info</h3>
          <div class="row">
            <h5 id="fd">Mobile No: 8805100927</h5>
          </div>
          <div class="row">
            <h5 id="fd">Mail To: pratik7368patil@gmail.com</h5>
          </div>
          <div class="row">
            <h5 id="fd">Address: Rutuja Computers Malkapur</h5>
          </div>
        </div>
      </div>
      </div>
      <hr>
      <div class="container" id="ff">
      Copyright &copy; Rutuja Computers 2019. All Rights Reserved
    </div>  
    </center>
    </div>
  </footer>
</body>
</html>