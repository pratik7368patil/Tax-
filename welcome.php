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
        <title>Admin Login Page</title>

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;
         }
         #anv{
          margin-bottom: 80px;
         }
         footer{
                
            background-color: lightgray;
            margin-top: 50px;
            opacity: 0.8;
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
                border-image:linear-gradient(to bottom, black 2%, gray 25%,lightgray 75%) 4;
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
            color: white;
            border-bottom: 1px solid green;
          }
          .page-header{
          
            border-left: 4px solid black;
          }
          body{
            background:linear-gradient(0deg, #f3f5f9 1%, transparent  80%);
          }
          .btn-default{
            background: white;
            color: royalblue;
            border: 2px solid royalblue;
          }
          .btn-default:hover{
            background: black;
            color: white;
            border: 2px solid royalblue;
          }
          .btn-danger{
            border: 2px solid black;
          }
          .btn-danger:hover{
            border: 2px solid green;
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
            font-size: 20px;
          }
          #hy:hover{
            color: green;
            border-bottom: 4px solid green; 
          }
            #hy1{
                color: black;
                border-bottom: 4px solid white;
                font-size: 20px;
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
            padding-top: 10px;
          }
          kbd{
            font-size: 25px;
            color: lightgreen;
          }
    </style>
    <script type="text/javascript">
        function new_village() {
            
        }
    </script>
</head>
<body id="particles-js">
  <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                    <kbd>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Admin's Panel</kbd>
                  </div>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
              
                    <li><a href="settings.php" id="hy"><span class="glyphicon glyphicon-cog"></span><b> Settings</b></a></li>
                    <li><a href="all_client.php" id="hy"><span class="glyphicon glyphicon-list"></span> <b>All Clients</b></a></li>
                    <li><a href="logout.php" id="hy1"><span class="glyphicon glyphicon-log-out"></span> <b>Sign out</b></a></li>
                    </ul>
                      </div>
                </div>

        </nav>

    <div class="container">
        <h2>Master Entry Default Values</h2>
        <p>If you want to change these values then update software.</p>
        <div class="row">
            <div class="col-sm-6">
               <table class="table table-bordered">
                   <tbody>
                    <tr><th colspan="2"> <center>भारांकन </center></th></tr>
                    <tr>
                       <th> <center>इमारतीचा वापर </center></th>
                       <th> दर </th>
                   </tr>
                   <tr>
                       <td> निवासी   </td>
                       <td> 1 </td>
                   </tr>
                   <tr>
                       <td> औद्योगिक </td>
                       <td> 1.2 </td>
                   </tr>
                   <tr>
                       <td> वाणिज्यिक </td>
                       <td> 1.25 </td>
                   </tr>
                   </tbody>
               </table> 
            </div>
            <div class="col-sm-6">
                <table class="table table-bordered">
                   <tbody>
                    <tr><th colspan="2"><center>नमुना ९</center>  </th></tr>
                    <tr>
                       <th> Field 1 </th>
                       <th> Field 2 </th>
                   </tr>
                   <tr>
                       <td> नोटीस फी </td>
                       <td> 5 </td>
                   </tr>
                   <tr>
                       <td> वारंट फी </td>
                       <td> 70 </td>
                   </tr>
                   <tr>
                       <td> दगडाची रक्कम </td>
                       <td> 5 </td>
                   </tr>
                   </tbody>
               </table> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <table class="table table-bordered">
                   <tbody>
                    <tr><th colspan="2"><center> दिवाकर </center></th></tr>
                    <tr>
                       <th> Field 1 </th>
                       <th> Field 2 </th>
                   </tr>
                   <tr>
                       <td>0 ते 300 चौ.मी. </td>
                       <td> 12 </td>
                   </tr>
                   <tr>
                       <td>301 ते 700 चौ.मी. </td>
                       <td> 22 </td>
                   </tr>
                   <tr>
                       <td>701 ते पुढे.. चौ.मी. </td>
                       <td> 32 </td>
                   </tr>
                   </tbody>
               </table> 
            </div>
            <div class="col-sm-6">
                <table class="table table-bordered">
                   <tbody>
                    <tr><th colspan="2"><center> आरोग्य कर  </center></th></tr>
                    <tr>
                       <th> Field 1 </th>
                       <th> Field 2 </th>
                   </tr>
                   <tr>
                       <td>0 ते 300 चौ.मी. </td>
                       <td> 12 </td>
                   </tr>
                   <tr>
                       <td>301 ते 700 चौ.मी. </td>
                       <td> 22 </td>
                   </tr>
                   <tr>
                       <td>701 ते पुढे.. चौ.मी. </td>
                       <td> 32 </td>
                   </tr>
                   </tbody>
               </table> 
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th></th>
                    <th>कच्चे घर</th>
                    <th>अर्ध पक्के</th>
                    <th>मजला बिल्डिंग</th>
                    <th>इतर पक्के</th>
                    <th>पक्के घर</th>
                </tr>
                <tr>
                    <td>0 ते 2 वर्षे</td>
                    <td>1.00</td>
                    <td>1.00</td>
                    <td>1.00</td>
                    <td>1.00</td>
                    <td>1.00</td>
                </tr>
                <tr>
                    <td>3 ते 5 वर्षे</td>
                    <td>0.95</td>
                    <td>0.95</td>
                    <td>0.95</td>
                    <td>0.95</td>
                    <td>0.95</td>
                </tr>
                <tr>
                    <td>6 ते 10 वर्षे</td>
                    <td>0.85</td>
                    <td>0.85</td>
                    <td>0.90</td>
                    <td>0.90</td>
                    <td>0.90</td>
                </tr>
                <tr>
                    <td>11 ते 20 वर्षे</td>
                    <td>0.75</td>
                    <td>0.75</td>
                    <td>0.80</td>
                    <td>0.80</td>
                    <td>0.80</td>
                </tr>
                <tr>
                    <td>21 ते 30 वर्षे</td>
                    <td>0.60</td>
                    <td>0.60</td>
                    <td>0.70</td>
                    <td>0.70</td>
                    <td>0.70</td>
                </tr>
                <tr>
                    <td>31 ते 40 वर्षे</td>
                    <td>0.45</td>
                    <td>0.45</td>
                    <td>0.60</td>
                    <td>0.60</td>
                    <td>0.60</td>
                </tr>
                <tr>
                    <td>41 ते 50 वर्षे</td>
                    <td>0.30</td>
                    <td>0.30</td>
                    <td>0.50</td>
                    <td>0.50</td>
                    <td>0.50</td>
                </tr>
                <tr>
                    <td>51 ते 60 वर्षे</td>
                    <td>0.20</td>
                    <td>0.20</td>
                    <td>0.40</td>
                    <td>0.40</td>
                    <td>0.40</td>
                </tr>
                <tr>
                    <td>60 वर्षे पेक्षा जास्त</td>
                    <td>0.15</td>
                    <td>0.15</td>
                    <td>0.30</td>
                    <td>0.30</td>
                    <td>0.30</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
               <table class="table table-bordered">
                   <tbody>
                       <tr>
                          <th colspan="3"><center> इमारतीवरील कराचा दर </center></th> 
                       </tr>
                       <tr>
                           <th><center>इमारत/जागेचा प्रकार </center> </th>
                           <th>मूल्य</th>
                           <th>कराचा दर</th>
                       </tr>
                       <tr>
                           <td>कच्चे घर</td>
                           <td>5355</td>
                           <td>0.30</td>
                       </tr>
                       <tr>
                           <td>अर्धकच्चे</td>
                           <td>7140</td>
                           <td>0.60</td>
                       </tr>
                       <tr>
                           <td>इतर पक्के</td>
                           <td>10710</td>
                           <td>0.75</td>
                       </tr>

                       <tr>
                           <td>पक्के</td>
                           <td>11900</td>
                           <td>1.20</td>
                       </tr>
                       <tr>
                           <td>मनोरे</td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <td>मनोरे ची खुली जागा </td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <td>खुली जागा</td>
                           <td>0</td>
                           <td>1.50</td>
                       </tr>
                   </tbody>
               </table> 
            </div>
            <div class="col-sm-6">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th colspan="2"><center>पाणीकर</center> </th>
                        </tr>
                        <tr>
                            <th>Field 1</th>
                            <th>Field 2</th>
                        </tr>
                        <tr>
                            <td>विशेष पाणीकरास पात्र (अर्धा इंच)</td>
                            <td>10.20</td>
                        </tr>
                        <tr>
                            <td>विशेष पाणीकरास पात्र (पाउण इंच)</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <td>सामान्य पाणीकरास पात्र</td>
                            <td>11.10</td>
                        </tr>
                        <tr>
                            <td>पाणी करास पात्र नसलेली जागा / इमारत</td>
                            <td>0.00</td>
                        </tr>
                    </tbody>
                </table>
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
            <h5><a href="#" id="fl">About</a></h5>
          </div>
          <div class="row">
            <h5><a href="all_client.php" id="fl">All Clients</a></h5>
          </div>
        </div>
        <div class="col-md-4" id="fc">
          <h3 class="fa">Prints</h3>
          <div class="row">
            <h5><a href="prints.php" id="fl" target="_blanck">Prints For Record</a></h5>
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