<?php
$con = mysqli_connect("127.0.0.1","root","","rutuja computers gram") or die(mysqli_error($con));


  $select_query= "select client_id,client_name,village_name from clients";
  $select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
  $select_count= "select count(client_id) from clients";
  $select_count_result= mysqli_query($con, $select_count) or die(mysqli_error($con));
  $row2 = mysqli_fetch_array($select_count_result)
?>
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
      
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/rc-icon.png">

        <title>Rutuja Computers</title>
        <style>
            .navbar-default{
                padding: 10px 10px 10px 10px;
            }
            #brand{
                font-size: 25px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default" id="custom-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="welcome.php" id="brand"><b>कर आकारणी तपशील </b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span><b> Contach Us</b></a></li>
                    </ul>
                      </div>
                </div>

        </nav>
        <div class="container">
            <h3>Client List : total clients:--- <?php echo $row2[0] ?></h3>
            <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Sr. No.</th>
                            <th><center>मालमत्ता धारकाचे नाव </center></th>
                            <th><center>गावाचे नांव </center></th>
                        </tr>
            <?php while($row = mysqli_fetch_array($select_query_result)) { ?>
            
                <tr>
                    <td id="cuntr"><?php echo $row['client_id'] ?></td>
                    <td><center><?php echo $row['client_name'] ?></center></td>
                    <td><center><?php echo $row['village_name'] ?></center></td>
                </tr>
                        
            <?php } ?>
            </tbody>
                </table>
        </div>
        <?php $con->close(); ?>
    </body>

    </html>
    