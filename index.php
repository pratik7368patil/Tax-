<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
  }

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kar Akarni Tapshil</title>
	<meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/rc-icon.png">

        <style>
        	#custom-nav{
        		margin-top: 50px;
        	}
            
        	#nc{
        		
        		color: royalblue;
        		background-color: white;
                border: 3px solid royalblue;
        	}  
        	#nc:hover{
        		background: black;
        		color: white;
        	}
        	#hy{
        		color: black;
        		border-bottom: 4px solid whitesmoke;   
        	}
        	#hy:hover{
        		border-bottom: 4px solid green;
                cursor: pointer;
                background: #f3f5f9;
                color: black;
        	}
        	#h
        	{
        		color: black;
        		font-size: 30px;
        	}
        	#h:hover{
        		color: green;
        		
        	}
            .navbar-default{
                padding: 10px 10px 10px 10px;
                box-shadow: 0px 0px 10px 0px;
            }
        	body{
        		    font-family: Roboto,Arial,Helvetica,sans-serif;
        		background-attachment: fixed;
        		background-size:100% 100%;	
        	}
        	.jumbotron{
        		
        		color: black;
        		background: #f3f5f9;
                background-opacity:0.6;
        	}
        	footer{
                border-top: ;
        		background-color: #010e28;
        		margin-top: 50px;
        	}
        	.fa{
        		font-size: 20px;
        		color: hsla(0,0%,100%,.5);
        		
        	}
        	.icon-bar{
        		background: black;
        	}
        	#fr{
        		padding: 10px 10px 10px 10px;
        		color: hsla(0,0%,100%,.5);
        	}
        	#fc{
                border-right: 4px solid;
                border-image:linear-gradient(to bottom, orange 2%, white 25%,transparent 75%) 4;
        	}
        	#ff{
        		color: hsla(0,0%,100%,.5);
        		padding-bottom: 20px;
        	}
        	#fd{
        		color: hsla(0,0%,100%,.5);
        	}
        	#fl:hover{
        		text-decoration: none;
        		color: white;
        		border-bottom: 1px solid orange;
                cursor: pointer;
        	}
            #ic{
                cursor: pointer;
            }
            #he1{
                color: gray;
            }
            .ast{
                color: royalblue;
            }
            #mrk{
                font-size: 20px;
            }


        </style>

        <script type="text/javascript">
            function nightmode(){
                  document.body.style.backgroundColor="black";
            }
            function nightmode1(){
                  document.body.style.backgroundColor="white";
            }
        </script>
</head>
<body>
	<nav class="navbar navbar-default navbar-dark">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php" id="h"><b>कर आकारणी तपशील </b><kbd>Rutuja Computers</kbd></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <!-- Button trigger modal -->
<a type="button" data-toggle="modal" id="hy" data-target="#exampleModal">
<span class="glyphicon glyphicon-log-in"></span> <b>Login Page</b>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="modal-header">
        <div class="row">
            <div class="col-sm-8">
        <h2 class="modal-title" id="exampleModalLabel">Welcome Back Admin</h2>
    </div>
    <div class="col-sm-4">
        <button type="button" id="mrk" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    </div>
      </div>
      <div class="modal-body">
        <p>Please fill in your credentials to login.</p>
            <br>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <center><label style="text-align: left;">Username</label></center>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <center><label style="text-align: left;">Password</label></center>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <center><input type="submit" class="btn btn-default btn-lg" id="nc" value="Login"></center>
            </div>
      </div>
      <div class="modal-footer">
        <center><p>Don't have an account? <a href="register.php">Sign up now</a>.</p></center>
      </div>
  </form>
    </div>
  </div>
</div>
                    </li>
                      <li><a href="all_client.php" id="hy" target="_blanck"><b><span class="glyphicon glyphicon-list"></span> All Clients</b></a></li>
                  
                    <li><a href="contact.php" id="hy"><span class="glyphicon glyphicon-envelope"></span><b> Contach Us</b></a></li>
                    </ul>
                      </div>
                </div>

        </nav>
	<div class="container">
		<div class="jumbotron" id="custom-nav">
            <a onclick="nightmode()" id="ic"><span class="glyphicon glyphicon-adjust"></span></a>
            <a onclick="nightmode1()" id="ic"><span class="glyphicon glyphicon-refresh"></span></a>
<center><p><h2><span class="ast">*</span> पं.स - मलकापूर <span class="ast">*</span> जी.प. - बुलढाणा <span class="ast">*</span></h2>
    <h3 id="he1">ग्रामपंचायत हद्दीतील करास पात्र इमारतीवर, जागेंवर करावयाच्या फेरकर आकारणीचा तक्ता 
</h3>
<h3 id="he1">१) महाराष्ट्र शासन राजपत्र असाधारण भाग ४ ब ग्रामविकास व जलसंधारण विभाग भवन, २५ मर्झबान पथ, फोर्ट, मुंबई - ४००००१ दिनांक ३१ डिसेंबर २०१५ ची अधिसूचना <br><br>२) महाराष्ट्र ग्रामपंचायत अधिनियम १९५८ चे कलम १२४ व महाराष्ट्र ग्रामपंचायत कर व फि (सुधारणा) मुख्य अधिनियम २०१५ </h3>
</p></center>
</div>
	</div>
	<center>
		<a href="newclient.php" class="btn btn-lg" id="nc" target="_blanck">NEW CLIENT</a>
	</center>

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
						<h5><a data-toggle="modal" data-target="#exampleModal" id="fl"><span class="glyphicon glyphicon-user
"></span> Admin Login</a></h5>
					</div>
					<div class="row">
						<h5><a onclick="nightmode()" id="fl"><span class="glyphicon glyphicon-eye-close"></span> Night Mode</a>  <a onclick="nightmode1()" id="fl">Off</a></h5>
					</div>
					<div class="row">
						<h5><a href="all_client.php" id="fl" target="_blanck">All Clients</a></h5>
					</div>
				</div>
				<div class="col-md-4" id="fc">
					<h3 class="fa">Prints</h3>
					<div class="row">
						<h5><a data-toggle="modal" data-target="#exampleModal" id="fl" target="_blanck">Prints For Record</a></h5>
					</div>
					<div class="row">
						<h5><a data-toggle="modal" data-target="#exampleModal" id="fl" target="_blanck">Prints For Client</a></h5>
					</div>
					<div class="row">
						<h5><a href="#top" id="fl"><span class="glyphicon glyphicon-arrow-up"></span> Go back to Top</a></h5>
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