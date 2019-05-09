<?php
$con = mysqli_connect("127.0.0.1","root","","rutuja computers gram") or die(mysqli_error($con));
$firstname=  mysqli_real_escape_string($con, $_POST['firstname']);
$lastname= mysqli_real_escape_string($con, $_POST['lastname']);
$email= mysqli_real_escape_string($con, $_POST['email']);
$mobileno= mysqli_real_escape_string($con, $_POST['mobileno']);
$msg= mysqli_real_escape_string($con, $_POST['msg']);

  $user_registration_query= "insert into contactdatabase(firstname, lastname, email, mobileno, msg) values ('$firstname','$lastname','$email','$mobileno','$msg')";
  $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));


?>
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css"  href="css/index.css" >
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="css/index.css" >
        <title>Rutuja Computers</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top drop-shadow" id="custom-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php" id="brand"><b>Working Gram</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      <li>


                        <a href="servies.php"class="dropdown-toggle" data-toggle="dropdown"><b>Prints</b>
                         <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                    
                    <li><a href="testpfc.php"><b>Print for Record</b></a></li>
                    <li><a href="test.php"><b>Reciept</b></a></li>
                        </ul>

                      </li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span><b> Contach Us</b></a></li>
                    </ul>
                      </div>
                </div>

        </nav>
        <div><center>
        <h2>Your information submitted Successfully.</h2>
        <p>We will contact you as soon as possible.</p></center>
</div>
      </body>
</html>
