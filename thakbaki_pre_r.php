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

<style type="text/css">
        body{ font:  sans-serif; text-align: center;
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
            padding: 10px 10px 10px 10px;
            border: 2px solid whitesmoke;
            border-radius: 7px;
          }
          #li:hover{
            background: whitesmoke;
            border: 2px solid royalblue;
            border-radius: 30px;
          }
          #nli{
            text-decoration: none;
          }
           .btn-primary{
            background: white;
            color: royalblue;
            border: 4px solid royalblue;
           }
           .btn-primary:hover{
            background: whitesmoke;
            color: green;
           }
           .navbar-default{
                border: 1px solid transparent;
            }
            .navbar-default{
                padding: 10px 10px 10px 10px;
                box-shadow: 0px 0px 10px 0px;
            }
           #hy1{
                color: black;
                border-bottom: 4px solid white;
            }
            #hy1:hover{
                color: red;
                border-bottom: 4px solid red; 
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
            .jb1{
                color: red;
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

                    <a class="navbar-brand" id="h"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      
                      <li><a href="all_client.php" class="btn-lg" id="hy"><span class="glyphicon glyphicon-list"></span> All Clients</a></li>
                      <li><a href="thakbaki_add_r.php" class="btn-lg" id="hy">ADD Previous Record</a></li>
                      <li><a href="settings.php" class="btn-lg" id="hy"><span class="glyphicon glyphicon-arrow-left"></span> Back to Settings</a></li>
                      <li><a href="thakbaki.php" class="btn-lg" id="hy"><span class="glyphicon glyphicon-search"></span> Back to search page</a></li>


                    <li><a href="logout.php" class="btn-lg" id="hy1"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
                    </ul>
                      </div>
                </div>

        </nav>
    <div class="container">
        <div class="jumbotron">
        <h2>Edit Previous Records</h2>
        <p class="jb1">जुना रेकॉर्ड भरतांना चुकल्यास :<br>
१) जर गावाचे नाव किव्वा घर क्र चुकल्यास रेकॉर्ड DELETE करावा आणि रेकॉर्ड पुन्हा ADD करावा . <a href="thakbaki.php">click here</a><br>
२) जर गावाचे नाव किव्वा घर क्र चुकलेला नसेल तर खालील FORM भरावा. </p>
    </div>
    </div>
            <div class="container">
<br>
       <form action="thakbaki_pre_r_db.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>घर क्र.</label>
                    <input type="text" name="ghar_no" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>गाव</label>
                    <input type="text" name="village_name" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>नाव</label>
                    <input type="text" name="client_name" class="form-control">
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>थकीत घ.पट्टी</label>
                    <input type="text" name="thak_gharpatti" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>चालू घ.पट्टी</label>
                    <input type="text" name="chalu_gharpatti" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>एकूण घ.पट्टी</label>
                    <input type="text" name="ekun_gharpatti" class="form-control" disabled>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>थकीत दिवाबत्ती</label>
                    <input type="text" name="thak_divabatti" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>चालू दिवाबत्ती</label>
                    <input type="text" name="chalu_divabatti" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>एकूण दिवाबत्ती</label>
                    <input type="text" name="ekun_divabatti" class="form-control" disabled>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>थकीत आ.कर</label>
                    <input type="text" name="thak_akar" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>चालू आ.कर</label>
                    <input type="text" name="chalu_akar" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>एकूण आ.कर</label>
                    <input type="text" name="ekun_akar" class="form-control" disabled>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>थकीत पाणीकर</label>
                    <input type="text" name="thak_panikar" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>चालू पाणीकर</label>
                    <input type="text" name="chalu_panikar" class="form-control">
                </div>  
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>एकूण पाणीकर</label>
                    <input type="text" name="ekun_panikar" class="form-control" disabled>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>नोटीस फी</label>
                    <input type="text" name="notice_fee" class="form-control">
                </div>
            </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>वारंट फी</label>
                    <input type="text" name="varant_fee" class="form-control">
                </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>एकूण कर</label>
                    <input type="text" name="ekun_kar" class="form-control">
                </div>
                </div>
            </div>
        </div>
            <br>
            <div class="row">
                <center><button class="btn btn-primary btn-lg">Edit</button></center>
            </div>
        </form>
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