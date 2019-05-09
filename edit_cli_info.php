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
        <title>Clients Pending Tax</title>

    <style type="text/css">
        body{ font:  sans-serif; text-align: center; padding-top: 30px;
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
            color: royalblue;
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
          .btn-primary,.btn-default{
            margin-bottom: 20px;
          
          }
          .jumbotron{
            background: #f3f5f9;
          }
          #li{
            padding: 45px 10px 45px 10px;
            border-left: 4px solid whitesmoke;
          }
          #li:hover{
            background: #F0FFF0;
            border-left: 4px solid royalblue;
          }
          #nli{
            text-decoration: none;
          }
           .btn-primary{
            background: white;
            color: royalblue;
            border: 2px solid royalblue;
           }
           .btn-primary:hover{
            background: whitesmoke;
            color: green;
           }

    </style>
    
</head>
<body>
<div class="container">
    <form action="#" method="post">
      <div class="form-row">
    <div class="form-group col-md-5">
      <label for="gram_name">ग्रामपंचायतीचे नांव :</label>
      <select id="gram_name" class="form-control" name="gram_name">
        <option selected> Malkapur </option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="village_name">गावाचे नांव :</label>
      <select id="village_name" class="form-control" name="village_name">
        <option selected> Lonwadi </option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
        <label for="client_id">Client ID :</label>
        <input type="text" name="client_id" id="client_id" class="form-control" value="1">
    </div>
    
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="client_name">मालमत्ता धारकाचे नांव :</label>
    <input type="text" class="form-control" id="client_name" name="client_name">
  </div>
  <div class="form-group col-md-6">
    <label for="client_wife">मालमत्ता धारकाच्या पत्नीचे नांव :</label>
    <input type="text" class="form-control" id="client_wife" name="client_wife" value="स्वतः">
  </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="bhog_name">भोगवटदाराचे नांव :</label>
      <input type="text" class="form-control" id="bhog_name" name="bhog_name" value="स्वतः">
    </div>
    <div class="form-group col-md-3">
      <label for="mobile_no">मो.क्र. :</label>
      <input type="text" class="form-control" id="mobile_no" name="mobile_no">
    </div>
    <div class="form-group col-md-3">
      <label for="milkat_no">मिळकत क्रमांक :</label>
      <input type="text" class="form-control" id="milkat_no" name="milkat_no">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
        <label for="plotcal">जागेचे मोजमाप :</label>
        <select id="plotcal" class="form-control" name="plotcal">
        <option selected>Foot</option>
        <option>Meter</option>
      </select>
    </div>
    <div class="form-group col-md-3">
        <label for="lambi">लांबी :</label>
        <input type="text" class="form-control" name="lambi" id="lambi">
    </div>
    <div class="form-group col-md-3">
        <label for="rundi">रुंदी :</label>
        <input type="text" class="form-control" name="rundi" id="rundi">
    </div>

    <div class="form-group col-md-2">
        <label for="total">एकूण :</label>
        <input type="text" class="form-control" name="total" id="total">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
        <label for="purves">पूर्वेस :</label>
        <input type="text" class="form-control" name="purves" id="purves">
    </div>
    <div class="form-group col-md-3">
        <label for="pachhimes">पश्चिमेस :</label>
        <input type="text" class="form-control" name="pachhimes" id="pachhimes">
    </div>
    <div class="form-group col-md-3">
        <label for="uttares">उत्तरेस  :</label>
        <input type="text" class="form-control" name="uttares" id="uttares">
    </div>
    <div class="form-group col-md-3">
        <label for="dakshines">दक्षिणेस :</label>
        <input type="text" class="form-control" name="dakshines" id="dakshines">
    </div>
  </div>

<div class="form-row">
    <div class="form-group col-md-3">
        <label for="vapar_disha">वापरण्याची दिशा :</label>
        <select id="vapar_disha" class="form-control" name="vapar_disha">
        <option selected>पूर्व </option>
        <option>पश्चिम</option>
        <option>उत्तर</option>
        <option>दक्षिण</option>
      </select>
    </div>
    <div class="form-group col-md-2">
        <label for="sg_no">स.क्र./ग.क्र. :</label>
        <input type="text" class="form-control" name="sg_no" id="sg_no">
    </div>
    <div class="form-group col-md-2">
        <label for="plot_no">प्लॉट क्र. :</label>
        <input type="text" class="form-control" name="plot_no" id="plot_no">
    </div>
    <div class="form-group col-md-3">
        <label for="jagechi_chsima">जागेची चतुर्सिमा :</label>
        <select id="jagechi_chsima" class="form-control" name="jagechi_chsima">
        <option selected>पूर्व-पश्चिम </option>
        <option>उत्तर-दक्षिण</option>
      </select>
    </div>
    <div class="form-group col-md-2">
        <label for="shau">शौचालय :</label>
        <select id="shau" class="form-control" name="shau">
        <option> आहे </option>
        <option> नाही </option>
      </select>
    </div>
  </div>
  <div class="row">
  <div class="form-group col-sm-12">
        <label for="shera">शेरा :</label>
        <input type="text" name="shera" id="shera" class="form-control">
    </div>
</div>
<center><button type="submit" class="btn btn-primary btn-lg">Submit My Form</button></center>
<br>
<br>
    </form>
</div>
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