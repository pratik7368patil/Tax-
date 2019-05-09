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
          #fc{
            border-right: 4px solid green;
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

                    <a class="navbar-brand" id="h"><kbd><span class="glyphicon glyphicon-plus"></span> NEW VILLAGE</kbd></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      
                      <li><a href="all_client.php" class="btn-lg" id="hy"><span class="glyphicon glyphicon-list"></span> All Clients</a></li>
                      <li><a href="edit_village.php" class="btn-lg" id="hy">Edit Village Info</a></li>
                      <li><a href="del_village.php" class="btn-lg" id="hy"><span class="glyphicon glyphicon-trash"></span> Delete Village Info</a></li>
                      <li><a href="settings.php" class="btn-lg" id="hy"><span class="glyphicon glyphicon-arrow-left" id="hy"></span> Go Back Settings</a></li>

                    <li><a href="logout.php" class="btn-lg" id="hy1"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
                    </ul>
                      </div>
                </div>
        </nav>
<br>
<form method="post" action="new_village_db_con.php">
<div class="container">
	<center>
    <h2>Master Entry ADD New Village</h2>
		<label for="village_name">Village Name :</label>
		<input type="text" name="village_name" id="village_name">
	</center>
</div>
<br>
    <div class="container">
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
                       <td> <input type="text" name="nivasi" id="nivasi"> </td>
                   </tr>
                   <tr>
                       <td> औद्योगिक </td>
                       <td> <input type="text" name="audhyogik" id="audhyogik"> </td>
                   </tr>
                   <tr>
                       <td> वाणिज्यिक </td>
                       <td> <input type="text" name="vanijya" id="vanijya"> </td>
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
                       <td> <input type="text" name="notice_fee" id="notice_fee"> </td>
                   </tr>
                   <tr>
                       <td> वारंट फी </td>
                       <td> <input type="text" name="varant_fee" id="varant_fee"> </td>
                   </tr>
                   <tr>
                       <td> दगडाची रक्कम </td>
                       <td> <input type="text" name="dagdachi_rakkam" id="dagdachi_rakkam"> </td>
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
                       <td> <input type="text" name="0to300d" id="0to300d"> </td>
                   </tr>
                   <tr>
                       <td>301 ते 700 चौ.मी. </td>
                       <td> <input type="text" name="301to700d" id="301to700d"> </td>
                   </tr>
                   <tr>
                       <td>701 ते पुढे.. चौ.मी. </td>
                       <td> <input type="text" name="701tod" id="701tod"> </td>
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
                       <td> <input type="text" name="0to300a" id="0to300a"> </td>
                   </tr>
                   <tr>
                       <td>301 ते 700 चौ.मी. </td>
                       <td> <input type="text" name="301to700a" id="301to700a"> </td>
                   </tr>
                   <tr>
                       <td>701 ते पुढे.. चौ.मी. </td>
                       <td> <input type="text" name="700toa" id="700toa"> </td>
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
                    <th>0 ते 2 वर्षे</th>
                    <td><input type="text" name="0to2kg" id="0to2kg"></td>
                    <td><input type="text" name="0to2ap" id="0to2ap"></td>
                    <td><input type="text" name="0to2mb" id="0to2mb"></td>
                    <td><input type="text" name="0to2ep" id="0to2ep"></td>
                    <td><input type="text" name="0to2pg" id="0to2pg"></td>
                </tr>
                <tr>
                    <th>3 ते 5 वर्षे</th>
                    <td><input type="text" name="3to5kg" id="3to5kg"></td>
                    <td><input type="text" name="3to5ap" id="3to5ap"></td>
                    <td><input type="text" name="3to5mb" id="3to5mb"></td>
                    <td><input type="text" name="3to5ep" id="3to5ep"></td>
                    <td><input type="text" name="3to5pg" id="3to5pg"></td>
                </tr>
                <tr>
                    <th>6 ते 10 वर्षे</th>
                    <td><input type="text" name="6to10kg" id="6to10kg"></td>
                    <td><input type="text" name="6to10ap" id="6to10ap"></td>
                    <td><input type="text" name="6to10mb" id="6to10mb"></td>
                    <td><input type="text" name="6to10ep" id="6to10ep"></td>
                    <td><input type="text" name="6to10pg" id="6to10pg"></td>
                </tr>
                <tr>
                    <th>11 ते 20 वर्षे</th>
                    <td><input type="text" name="11to20kg" id="11to20kg"></td>
                    <td><input type="text" name="11to20ap" id="11to20ap"></td>
                    <td><input type="text" name="11to20mb" id="11to20mb"></td>
                    <td><input type="text" name="11to20ep" id="11to20ep"></td>
                    <td><input type="text" name="11to20pg" id="11to20pg"></td>
                </tr>
                <tr>
                    <th>21 ते 30 वर्षे</th>
                    <td><input type="text" name="21to30kg" id="21to30kg"></td>
                    <td><input type="text" name="21to30ap" id="21to30ap"></td>
                    <td><input type="text" name="21to30mb" id="21to30mb"></td>
                    <td><input type="text" name="21to30ep" id="21to30ep"></td>
                    <td><input type="text" name="21to30pg" id="21to30pg"></td>
                </tr>
                <tr>
                    <th>31 ते 40 वर्षे</th>
                    <td><input type="text" name="31to40kg" id="31to40kg"></td>
                    <td><input type="text" name="31to40ap" id="31to40ap"></td>
                    <td><input type="text" name="31to40mb" id="31to40mb"></td>
                    <td><input type="text" name="31to40ep" id="31to40ep"></td>
                    <td><input type="text" name="31to40pg" id="31to40pg"></td>
                </tr>
                <tr>
                    <th>41 ते 50 वर्षे</th>
                    <td><input type="text" name="41to50kg" id="41to50kg"></td>
                    <td><input type="text" name="41to50ap" id="41to50ap"></td>
                    <td><input type="text" name="41to50mb" id="41to50mb"></td>
                    <td><input type="text" name="41to50ep" id="41to50ep"></td>
                    <td><input type="text" name="41to50pg" id="41to50pg"></td>
                </tr>
                <tr>
                    <th>51 ते 60 वर्षे</th>
                    <td><input type="text" name="51to60kg" id="51to60kg"></td>
                    <td><input type="text" name="51to60ap" id="51to60ap"></td>
                    <td><input type="text" name="51to60mb" id="51to60mb"></td>
                    <td><input type="text" name="51to60ep" id="51to60ep"></td>
                    <td><input type="text" name="51to60pg" id="51to60pg"></td>
                </tr>
                <tr>
                    <th>60 वर्षे पेक्षा जास्त</th>
                    <td><input type="text" name="60ypjkg" id="60ypjkg"></td>
                    <td><input type="text" name="60ypjap" id="60ypjap"></td>
                    <td><input type="text" name="60ypjmb" id="60ypjmb"></td>
                    <td><input type="text" name="60ypjep" id="60ypjep"></td>
                    <td><input type="text" name="60ypjpg" id="60ypj"></td>
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
                           <th>कच्चे घर</th>
                           <td><input type="text" name="kgm" id="kgm"></td>
                           <td><input type="text" name="kgkd" id="kgkd"></td>
                       </tr>
                       <tr>
                           <th>अर्धकच्चे</th>
                           <td><input type="text" name="akm" id="akm"></td>
                           <td><input type="text" name="akkd" id="akkd"></td>
                       </tr>
                       <tr>
                           <th>इतर पक्के</th>
                           <td><input type="text" name="epm" id="epm"></td>
                           <td><input type="text" name="epkd" id="epkd"></td>
                       </tr>

                       <tr>
                           <th>पक्के</th>
                           <td><input type="text" name="pm" id="pm"></td>
                           <td><input type="text" name="pkd" id="pkd"></td>
                       </tr>
                       <tr>
                           <th>मनोरे</th>
                           <td><input type="text" name="mm" id="mm"></td>
                           <td><input type="text" name="mkd" id="mkd"></td>
                       </tr>
                       <tr>
                           <th>मनोरे ची खुली जागा </th>
                           <td><input type="text" name="mkgm" id="mkgm"></td>
                           <td><input type="text" name="mkgkd" id="mkgkd"></td>
                       </tr>
                       <tr>
                           <th>खुली जागा</th>
                           <td><input type="text" name="kjm" id="kjm"></td>
                           <td><input type="text" name="kjkd" id="kjkd"></td>
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
                            <th>विशेष पाणीकरास पात्र (अर्धा इंच)</th>
                            <td><input type="text" name="vae" id="vae"></td>
                        </tr>
                        <tr>
                            <th>विशेष पाणीकरास पात्र (पाउण इंच)</th>
                            <td><input type="text" name="vpe" id="vpe"></td>
                        </tr>
                        <tr>
                            <th>सामान्य पाणीकरास पात्र</th>
                            <td><input type="text" name="spp" id="spp"></td>
                        </tr>
                        <tr>
                            <th>पाणी करास पात्र नसलेली जागा / इमारत</th>
                            <td><input type="text" name="pnj" id="pnj"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    
    <div class="container" id="con2">
        <button class="btn btn-lg btn-success">ADD New Village</button>
    </div>
</form>
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