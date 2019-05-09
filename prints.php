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
	<title>Prints</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/rc-icon.png">

	<style>
	#h,#hy{
		color: black;
		
	}
	#h:hover,#hy:hover{
		background:lightgray;
	}
    #hy:hover{
        color: red;
    }
	.navbar-default{
		padding: 10px 10px 10px 10px;	
	}
	#cr{
		padding-top: 20px;
	}
	.btn-default{
		background:black;
		color:white;
	}
    body{
            font-family: Roboto,Arial,Helvetica,sans-serif;
    }
	footer{
               
        		background-color:#010e28 ;
        		margin-top: 50px;
        		opacity: 0.8;
        	}
        	.fa{
        		font-size: 20px;
        		color: white;
        		
        	}
        	.icon-bar{
        		background: black;
        	}
        	#fr{
        		padding: 10px 10px 10px 10px;
        		color: white;
        	}
        	#ff{
        		color: white;
        		padding-bottom: 20px;
        	}
        	#fd{
        		color: white;
        	}
        	#fl:hover{
        		text-decoration: none;
        		color: white;
        		border-bottom: 1px solid green;
        	}
            .btn-default{
                background: white;
                border: 2px solid royalblue;
                color: royalblue;
            }
            .btn-default:hover{
                background: black;
                color: white;
            }


	</style>
</head>
<body>
	<div class="container1" id="con1">
	<nav class="navbar navbar-default unavbar-dark bg-dark drop-shadow">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="settings.php" id="h"><b>Back to Settings </b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="logout.php" id="hy"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                      </div>
                </div>

        </nav>
    </div>
    <div class="container">
    	<center>
    		<div class="row" id="cr">
    			<div class="col-sm-6">
                    <form action="print_for_record.php" method="post">
                    <div class="jumbotron">
                        <a href="#" class="btn btn-default">Continuous Prints of all Client's for Record</a>
                        <p>Here You will get Print of Client for <br>Government.</p>
                        <div class="row">
                            <div class="col-sm-6">
                        <label for="client_name">मालमत्ता धारकाचे नांव :</label>
                        <input type="text" name="client_name" id="client_name" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label for="village_name">गावाचे नांव :</label>
                        <input type="text" name="village_name" id="village_name" class="form-control">
                    </div>
                    </div>
                    </div>
    				<input type="submit" class="btn btn-default btn-lg" value="Print For Record">
                </form>
    			</div>
    			<div class="col-sm-6">
                    <form action="print_for_client.php" method="post">
                    <div class="jumbotron">
                        <a href="print_for_client_counti.php" class="btn btn-default">Continuous Prints of all Client's for Client</a>
                        <p>Here You will get Print of Client for <br>Client.</p>
                        <div class="row">
                            <div class="col-sm-6">
                        <label for="client_name">मालमत्ता धारकाचे नांव :</label>
                        <input type="text" name="client_name" id="client_name" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label for="village_name">गावाचे नांव :</label>
                        <input type="text" name="village_name" id="village_name" class="form-control">
                    </div>
                    </div>
                    </div>
                    <input type="submit" class="btn btn-default btn-lg" value="Print For Client">
                </form>
    			</div>
    		</div>
    	</center>
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
						<h5><a href="all_client.php" id="fl">All Clients</a></h5>
					</div>
				</div>
				<div class="col-md-4" id="fc">
					<h3 class="fa">Top</h3>
					
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