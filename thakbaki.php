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
        body{ font:  sans-serif; text-align: center;
            font-family: Roboto,Arial,Helvetica,sans-serif;
          }
        #con1{
            margin-top: 20px;
        }
        .navbar-default{
                border: 1px solid transparent;
            }
            .navbar-default{
                padding: 10px 10px 10px 10px;
                box-shadow: 0px 0px 10px 0px;
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
            color: black;
          }
          #fc{
            border-right: 4px solid;
                border-image:linear-gradient(to bottom, royalblue 2%, lightblue 25%,transparent 75%) 4;
          }
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
            background: whitesmoke;
          }
          #li:hover{
            background: lightgray;
            border-left: 4px solid royalblue;
          }
          #nli,#nli1{
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

    <script type="text/javascript">
      $(document).ready(function()  
       {  
      var p1 = '<form action="thak_del_client.php" method="post"><h2>Delete Thakbaki Record</h2><br><div class="container"><div class="row"><div class="form-group col-sm-6"><label for="village_name">गावाचे नांव :</label><input type="text" class="form-control" id="village_name" name="village_name"></div><div class="form-group col-sm-6"><label for="ghar_no">घर क्र. :</label><input type="text" class="form-control" id="ghar_no" name="ghar_no"></div></div><input type="submit" class=" btn btn-primary btn-lg"></div></form>'; 
            $("#nli1").click(function()  
            {  
                $("#content").html(p1);  
            });  
        }); 
    </script>
    
</head>
<body>
  <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="welcome.php" id="h"><b>Back To Working Page</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      
                      <li><a href="all_client.php" id="hy"><span class="glyphicon glyphicon-list"></span> <b>All Clients</b></a></li>
                  
                    <li><a href="prints.php" id="hy"  target="_blank"><span class="glyphicon glyphicon-print"></span><b> Prints</b></a></li>
                    <li><a href="logout.php" id="hy1"><span class="glyphicon glyphicon-log-out"></span> <b>Sign out</b></a></li>
                    </ul>
                      </div>
                </div>
        </nav>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
          <div class="row" id="li">
           <a href="thakbaki_add_r.php" class="btn-lg" id="nli">ADD Previous Record</a>
         </div>
         <div class="row" id="li">
        <a href="thakbaki_pre_r.php" class="btn-lg" id="nli">Edit Previous Record</a>
      </div>
      <div class="row" id="li">
        <a href="#" class="btn-lg" id="nli1"><span class="glyphicon glyphicon-trash"></span> Delete Previous Record</a>
      </div>
      <div class="row" id="li">
        <a href="thakbaki.php" class="btn-lg" id="nli">Back to Search Page<p><sub>(if you click on delete)</sub></p></a>
      </div>
      <div class="row" id="li">
        <a href="settings.php" class="btn-lg" id="nli"><span class="glyphicon glyphicon-arrow-left"></span> Back to Settings</a>
      </div>
    
        </div>
        <div class="col-sm-9">
	<div class="jumbotron" id="content">
		<p>Search for Village, This will give you all clients pending tax's information.</p>
		<form method="post" action="thakbaki_db.php">
		<center>
			<div class="form-group">
			<label for="gav_moholla"><h2>गाव-मोहोल्ला </h2></label>
			<select id="gav_moholla" class="form-control" name="gav_moholla">
        <option selected> Default </option>
        <option>Lonwadi</option>
        <option>Wakodi</option>
      </select>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary btn-lg" value="Search...">
		</div>
		</center>
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
      <div class="container">
      <div class="row" id="fr">
        <div class="col-md-4" id="fc">
          <h3 class="fa">Useful Links</h3>
          
          <div class="row">
            <h5><a href="welcome.php" id="fl">Back to Welcome Page</a></h5>
          </div>
          <div class="row">
            <h5><a href="all_client.php" id="fl" target="_blanck">All Clients</a></h5>
          </div>
        </div>
        <div class="col-md-4" id="fc">
          <h3 class="fa">Prints</h3>
          <div class="row">
            <h5><a href="prints.php" id="fl" target="_blanck">Prints For Reciept</a></h5>
          </div>
          <div class="row">
            <h5><a href="prints.php" id="fl" target="_blanck">Prints For Client</a></h5>
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