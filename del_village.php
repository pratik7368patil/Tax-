<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
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
        <title>Admin Page</title>

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; font-family: Roboto,Arial,Helvetica,sans-serif; }
        #con1{
          margin-top: 20px;
        }
        #con2{
          margin-bottom: 20px;
        }
        .page-header{
            border-bottom: 4px solid lightgray;
            border-left: 4px solid black;
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
            color: green;
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
          .btn-success{
            background: white;
            border:2px solid royalblue;
            color: royalblue;
          }
          .btn-success:hover{
            background-color: black;
            color:white;
          }
          .btn-default{
            background: white;
            color: royalblue;
            border: 2px solid royalblue;
          }
          .jumbotron{
            background: whitesmoke;
          }
          #hy1{
                color: black;
                border-bottom: 2px solid white;
            }
            #hy1:hover{
                color: red;
                border-bottom: 2px solid red; 
            }  
            #hy{
                color: black;
                border-bottom: 2px solid white;
            }
            #hy:hover{
                color: green;
                border-bottom: 2px solid green; 
            }
            .navbar-default{
                border: 1px solid transparent;
            }
            .navbar-default{
                padding: 10px 10px 10px 10px;
                box-shadow: 0px 0px 10px 0px;
            }
            #h
            {
              font-size: 25px;
              color: red;
            }


    </style>
    <script type="text/javascript">
        function new_village() {
            
        }
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

                    <a class="navbar-brand" id="h"><kbd><span class="glyphicon glyphicon-trash"></span> DELETE VILLAGE</kbd></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      
                      <li><a href="all_client.php" class="btn-lg" id="hy"><span class="glyphicon glyphicon-list"></span> All Clients</a></li>
                      <li><a href="edit_village.php" class="btn-lg" id="hy">Edit Village Info</a></li>
                      <li><a href="settings.php" class="btn-lg" id="hy"><span class="glyphicon glyphicon-arrow-left" id="hy"></span> Go Back Settings</a></li>

                    <li><a href="logout.php" class="btn-lg" id="hy1"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
                    </ul>
                      </div>
                </div>
        </nav>
<br>
<section class="container">
<section class="jumbotron">
<form method="post" action="del_village_db.php">
<div class="container">
	<center>
    <h3>Master Entry Delete Village</h3>
    <br>
    <div class="form-group">
		<label for="village_name">Village Name :</label>
		<input type="text" name="village_name" id="village_name" class="form-control">
  </div>
	</center>
</div>
<br>
    <div class="container" id="con2">
        <button class="btn btn-success">Delete Village</button>
    </div>
</form>
</section>
</section>
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