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
        <style>
          body{
            margin-top: 60px;
          }
        </style>
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

                    <a class="navbar-brand" href="index.php" id="brand"><b>कर आकारणी तपशील </b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      <li>


                        <a href="servies.php"class="dropdown-toggle" data-toggle="dropdown">Prints
                         <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                    
                    <li><a href="testpfc.php">Print for Record</a></li>
                    <li><a href="test.php">Reciept</a></li>
                        </ul>

                      </li>

                        

                    </ul>
                      </div>
                </div>

        </nav>
        <center>
        <div class="container">
          <div class="row col-lg-6 col-md-8 col-xs-8" id="pan">
            <div class="panel panel-default" id="custom-nav">
              <div class="panel-heading">
                <h3>Contact Us</h3>
              </div>
        <div class="panel-body">
          <form method="post" action="condatabase.php">
            <div class="form-group">
              <label for="firstname">First Name:</label>
              <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="mobileno">Mobile No:</label>
              <input type="text" class="form-control" id="mobileno" name="mobileno" required>
            </div>

            <div class="form-group">
              <label for="msg">Write you'r message here.</label>
              <input type="text" class="form-control" id="msg" name="msg" required>
            </div>
          <hr>
          <input type="checkbox" required>   I have accept all <a href="#">terms and conditions.</a></p>
            <button class="btn btn-primary btn-block">Submit</button>
          </form>

        </div>

            </div>
          </div>
          </div>
        </center>
      </body>
      </html>
