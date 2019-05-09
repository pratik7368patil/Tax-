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
        <script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
        <script type='text/javascript' src='js/dynamicpage.js'></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/rc-icon.png">
        <title>Clients Pending Tax</title>

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
                border-image:linear-gradient(to bottom, black 2%, gray 25%,lightgray 75%) 4;
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
            background: lightgray;
            border-left: 4px solid royalblue;
          }
          #nli,#nli1,#nli2,#nli3{
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
           .n{
            color: red;
           }
           .navbar-default{
                border: 1px solid transparent;
            }
            .navbar-default{
                padding: 10px 10px 10px 10px;
                box-shadow: 0px 0px 10px 0px;
            }

    </style>

    <script type="text/javascript">  
        $(document).ready(function()  
       {  
            var p1 = '<form action="edit_client_info_db.php" method="post"><div class="form-row"><div class="form-group col-md-2"><label for="client_id">CLIENT ID :</label><input type="text" name="client_id" id="client_id" class="form-control" value="1"></div><div class="form-group col-md-5"><label for="gram_name">ग्रामपंचायतीचे नांव :</label><select id="gram_name" class="form-control" name="gram_name"><option selected> Malkapur </option><option>...</option></select></div><div class="form-group col-md-5"><label for="village_name">गावाचे नांव :</label><select id="village_name" class="form-control" name="village_name"><option selected> Lonwadi </option><option>...</option></select></div></div><div class="form-row"><div class="form-group col-md-6"><label for="client_name">मालमत्ता धारकाचे नांव :</label><input type="text" class="form-control" id="client_name" name="client_name"></div><div class="form-group col-md-6"><label for="client_wife">मालमत्ता धारकाच्या पत्नीचे नांव :</label><input type="text" class="form-control" id="client_wife" name="client_wife" value="स्वतः"></div></div><div class="form-row"><div class="form-group col-md-6"><label for="bhog_name">भोगवटदाराचे नांव :</label><input type="text" class="form-control" id="bhog_name" name="bhog_name" value="स्वतः"></div><div class="form-group col-md-3"><label for="mobile_no">मो.क्र. :</label><input type="text" class="form-control" id="mobile_no" name="mobile_no"></div><div class="form-group col-md-3"><label for="milkat_no">मिळकत क्रमांक :</label><input type="text" class="form-control" id="milkat_no" name="milkat_no"></div></div><div class="form-row"><div class="form-group col-md-4"><label for="plotcal">जागेचे मोजमाप :</label><select id="plotcal" class="form-control" name="plotcal"><option selected>Foot</option><option>Meter</option></select></div><div class="form-group col-md-3"> <label for="lambi">लांबी :</label><input type="text" class="form-control" name="lambi" id="lambi"></div><div class="form-group col-md-3"><label for="rundi">रुंदी :</label><input type="text" class="form-control" name="rundi" id="rundi"></div><div class="form-group col-md-2"><label for="total">एकूण :</label><input type="text" class="form-control" name="total" id="total"></div></div><div class="form-row"><div class="form-group col-md-3"><label for="purves">पूर्वेस :</label><input type="text" class="form-control" name="purves" id="purves"></div><div class="form-group col-md-3"><label for="pachhimes">पश्चिमेस :</label><input type="text" class="form-control" name="pachhimes" id="pachhimes"></div><div class="form-group col-md-3"><label for="uttares">उत्तरेस  :</label><input type="text" class="form-control" name="uttares" id="uttares"></div><div class="form-group col-md-3"><label for="dakshines">दक्षिणेस :</label><input type="text" class="form-control" name="dakshines" id="dakshines"></div> </div><div class="form-row"><div class="form-group col-md-3"><label for="vapar_disha">वापरण्याची दिशा :</label><select id="vapar_disha" class="form-control" name="vapar_disha"><option selected>पूर्व </option><option>पश्चिम</option><option>उत्तर</option><option>दक्षिण</option></select></div><div class="form-group col-md-2"><label for="sg_no">स.क्र./ग.क्र. :</label><input type="text" class="form-control" name="sg_no" id="sg_no"></div><div class="form-group col-md-2"><label for="plot_no">प्लॉट क्र. :</label><input type="text" class="form-control" name="plot_no" id="plot_no"></div><div class="form-group col-md-3"><label for="jagechi_chsima">जागेची चतुर्सिमा :</label><select id="jagechi_chsima" class="form-control" name="jagechi_chsima"><option selected>पूर्व-पश्चिम </option><option>उत्तर-दक्षिण</option></select></div><div class="form-group col-md-2"><label for="shau">शौचालय :</label><select id="shau" class="form-control" name="shau"><option> आहे </option><option> नाही </option></select></div></div><div class="row"><div class="form-group col-sm-12"><label for="shera">शेरा :</label><input type="text" name="shera" id="shera" class="form-control"></div></div><center><button type="submit" class="btn btn-primary btn-lg">Edit My Form</button></center><br><br></form>';  
            var p2 = '<form action="emarat_type_edit_array.php" method="post"><h3><b>इमारत / जागेचा कर आकारणीचा तपशील :</b></h3><table id="myTable" class=" table order-list table-bordered"><thead><tr><td><b>Client ID :</b></td><td><b>मालमत्ता क्र. </b></td><td><b>इमारत/जागेचा प्रकार</b></td><td><b>बांधकामाची लांबी</b></td><td><b>बांधकामाची रुंदी</b></td><td><b>बांधकाम क्षेत्रफळ</b></td><td><b>मजला क्षेत्र</b></td><td><b>इमारतीचा वापर</b></td><td><b>बांधकाम वर्ष</b></td></tr></thead><tbody><tr><td class="col-sm-1"><input type="text" name="client_id" id="client_id" class="form-control"></td><td class="col-sm-1"><input type="text" name="malmatta_no" id="malmatta_no" class="form-control" value="1"></td><td class="col-sm-2"><select id="building_type" class="form-control" name="building_type"><option> झोपडी, मातीचे घर (कच्चे घर) </option><option> टिन पत्रे केलेल्या दगड विटांच्या भिंती (अर्धपक्के) </option><option> स्लॅप विटांच्या भिंती, आर.सी.सी. (इतर पक्के)</option><option> आर.सी.सी. पद्धतीची इमारत, ग्रेनाईटची इमारत (पक्के)</option></select></td><td class="col-sm-1"><input type="text" name="building_l"  id="building_l" class="form-control"/></td><td class="col-sm-1"><input type="text" name="building_w"  id="building_w" class="form-control"/></td><td class="col-sm-1"><input type="text" name="building_area"  id="building_area" class="form-control"/></td><td class="col-sm-1"><select id="b_vapar" class="form-control" name="b_vapar"><option>पहिला मजला</option><option>दुसरा मजला</option><option>तिसरा मजला</option><option></option></select></td><td class="col-sm-1"><select id="building_maj" class="form-control" name="building_maj"><option> निवासी </option><option> औद्योगिक </option><option> वाणिज्यिक </option></select></td><td class="col-sm-1"><input type="text" name="building_year" id="building_year" class="form-control"/></td><td colspan="col-sm-1"><button class="btn btn-primary" onclick="insertdata()">Edit</button></td><td class="col-sm-1"><a class="deleteRow"></a></td></tr></tbody><tfoot><tr><td colspan="6" style="text-align: left;"><input type="button" class="btn btn-success btn-block " id="addrow" value="Add Row" disabled></td></tr><tr></tr></tfoot></table></form>'; 
            var p3 = '<h4><a href="n_cli_uni_info.php" target="_blank">Client Name and ID Llinks</a></h4><form action="del_client.php" method="post"><h2>Delete Client From Here..</h2><br><div class="container"><div class="row"><div class="form-group col-sm-6"><label for="client_name">मालमत्ता धारकाचे नांव :</label><input type="text" class="form-control" id="client_name" name="client_name" required></div><div class="form-group col-sm-6"><label for="client_id">CLIENT ID :</label><input type="text" class="form-control" id="client_id" name="client_id" required></div></div><input type="submit" class="btn btn-primary btn-lg" value="Delete"></div></form>'; 
            $("#nli1").click(function()  
            {  
                $("#content").html(p1);  
            });  
            $("#nli2").click(function() {  
                $("#content").html(p2);  
            });  
            $("#nli3").click(function() {  
                $("#content").html(p3);  
            });  
        }); 
      </script>
    
</head>
<body>
  <div class="container">
    <div class="jumbotron">
      <center>
        <h2><kbd>Here You Can Edit or <span class="n">Delete</span> Clients Information.</kbd></h2>
          <h4>Edit Client Info and his Property Info by placing all Data in corresponding fields.</h4>
          <h4>OR <span class="n">DELETE</span> Client by placing his Name and Client ID.</h4>
          </center>
    </div>
  </div>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
          <div class="row" id="li">
           <a href="#" class="btn-lg" id="nli1">Edit Client Info</a>
         </div>
         <div class="row" id="li">
        <a href="#" class="btn-lg" id="nli2">Edit Client's Property Info</a>
      </div>
      <div class="row" id="li">
        <a href="#" class="btn-lg" id="nli3"><span class="glyphicon glyphicon-trash"></span> Delete Client</a>
      </div>
      <div class="row" id="li">
        <a href="settings.php" class="btn-lg" id="nli"><span class="glyphicon glyphicon-arrow-left"></span> Back to Settings</a>
      </div>
    
        </div>
        <div class="col-sm-9">
          <div class="jumbotron" id="content">
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