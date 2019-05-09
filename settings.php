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
 <html>
 <head>
 	<meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="icon" href="img/rc-icon.png">
        <title>Admin Settings</title>

        <style>
            body{
            background:linear-gradient(0deg, #f3f5f9 1%, transparent  80%);
                font-family: Roboto,Arial,Helvetica,sans-serif;
          }
        	#con1{
        		margin-top: 50px;
        	}
        	#custom-nav{
        		margin-top: 50px;
        	}
        	#nc{
        		
        		color: black;
        		background-color: orange;
        	}
        	#nc:hover{
        		background: black;
        		color: white;
        	}
        	#hy{
        		color: black;
        		border-bottom: 4px solid white;
        	}
        	#hy:hover{
        		color: green;
        		border-bottom: 4px solid green; 
        	}
            #hy1{
                color: black;
                border-bottom: 4px solid white;
            }
            #hy1:hover{
                color: red;
                border-bottom: 4px solid red; 
            }  
        	#h
        	{
        		color: black;
        		font-size: 25px;
        	}
        	#h:hover{
        		color: green;
        		
        	}
        	.navbar-default{
        		padding: 10px 10px 10px 10px;
                box-shadow: 0px 0px 10px 0px;
        	}
        	.panel:hover{
                border-bottom:4px solid green;
            }
            #rp:hover{
                border-bottom: 4px solid red;
            }
            footer{
                background-color: #DBEDFF;
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
            #ff{
                color: black;
                padding-bottom: 20px;
            }
            #fd{
                color: black;
            }
            #fl:hover{
                text-decoration: none;
                color: black;
                border-bottom: 1px solid green;
            }
            .panel-default{
                border-bottom:4px solid black;
                border-color: transparent;
            }
            .panel-default>.panel-heading {
                border-color: transparent;
                background-color: transparent;
             }
            .panel-footer{
                border-top:1px solid transparent;
            }
            .panel-footer:hover{
                box-shadow: 0px 0px 4px 0px;
                border-radius: 4px;
            }
            .thumbnail{
                border:1px solid transparent;
            }
            .navbar-default{
                border: 1px solid transparent;
            }
            .btn-default,.btn-primary{
                background: white;
                border:2px solid royalblue;
                color: royalblue;
            }
            .btn-default:hover{
                background: #f3f5f9;
                color: black;
            }
            .btn-primary:hover{
                background: red;
                color: white;
            }
            .thumbnail{
                text-decoration: none;
                border: 1px solid white;
            }
            .thumbnail:hover{
                text-decoration: none;
                border: 1px solid white;
            }


        </style>
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

 	<div class="container" id="con1">
 		<div class="row">
 			<div class="col-md-3">
 				<div class="panel panel-default	">
 					<div class="panel-heading">
 						<h3> <span class="glyphicon glyphicon-tasks"></span> Edit Database</h3>	
 					</div>
 					<div class="panel-body">
 						<span class="thumbnail"><img src="./img/img1.png" alt="example img"></span>
 					</div>
 					<div class="panel-footer">
 						<center><a href="edit_db.php" class="btn btn-default btn-lg">Change In Database</a></center>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-3">
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<h3> <span class="glyphicon glyphicon-plus"></span> ADD New Villages</h3>	
 					</div>
 					<div class="panel-body">
 						<span class="thumbnail"><img src="./img/img3.jfif" alt="example img"></span>
 					</div>
 					<div class="panel-footer">
 						<center><a href="new_village.php" class="btn btn-default btn-lg">ADD New Villages</a></center>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-3">
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<h3> <span class="glyphicon glyphicon-bitcoin"></span> थकबाकी रक्कम</h3>	
 					</div>
 					<div class="panel-body">
 						<span class="thumbnail"><img src="./img/money.png" alt="example img"></span>
 					</div>
 					<div class="panel-footer">
 						<center><a href="thakbaki.php" class="btn btn-default btn-lg">Edit थकबाकी रक्कम</a></center>
 					</div>
 				</div>
 			</div>
            <div class="col-md-3">
                <div class="panel panel-default" id="rp">
                    <div class="panel-heading">
                        <h3><span class="glyphicon glyphicon-pencil"></span> Reset Password</h3>    
                    </div>
                    <div class="panel-body">
                        <span class="thumbnail"><img src="./img/pass.png" alt="example img"></span>
                    </div>
                    <div class="panel-footer">
                        <center><a href="reset-password.php" class="btn btn-primary btn-lg">Change your Password</a></center>
                    </div>
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
                        <h5><a href="thakbaki_add_r.php" id="fl"  target="_blanck">ADD Previous Record (थकबाकी)</a></h5>
                    </div>
                    <div class="row">
                        <h5><a href="thakbaki_pre_r.php" id="fl"  target="_blanck">Edit Previous Record (थकबाकी)</a></h5>
                    </div>
                    <div class="row">
                        <h5><a href="all_client.php" id="fl">All Clients</a></h5>
                    </div>
                </div>
                <div class="col-md-4" id="fc">
                    <h3 class="fa">Prints</h3>
                    <div class="row">
                        <h5><a href="prints.php" id="fl" target="_blank">Prints For Record</a></h5>
                    </div>
                    <div class="row">
                        <h5><a href="prints.php" id="fl" target="_blank">Prints For Client</a></h5>
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