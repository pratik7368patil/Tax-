<?php
header( 'Content-Type: text/html; charset=utf-8' ); 
$con = mysqli_connect("127.0.0.1","root","","rutuja computers gram") or die(mysqli_error($con));

$select_count= "select count(client_id) from clients";
  $select_count_result= mysqli_query($con, $select_count) or die(mysqli_error($con));
  $row2 = mysqli_fetch_array($select_count_result);
  ?>

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
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/rc-icon.png">
        <title>Rutuja Computers</title>

        <style>
            body{
                    font-family: Roboto,Arial,Helvetica,sans-serif;
            }
            footer{
                border-top: ;
                background-color: #010e28;
                margin-top: 50px;
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
            #fc{
                border-right: 4px solid;
                border-image:linear-gradient(to bottom, green 2%, white 25%,transparent 75%) 4;
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
                cursor: pointer;
            }
            .navbar-default,.navbar-inverse{
                
                padding: 10px 10px 10px 10px;
            }
            #hor{
                border: 2px solid green;
                border-left: 4px solid black;
            }
            #brand{
                font-size: 30px;
                color: black;
            }
            #brand:hover{
                background: whitesmoke;
                color: royalblue;  
            }
            #ic{
                cursor: pointer;
            }
            .btn-primary{
                background: white;
                border: 2px solid royalblue;
                color: royalblue;
            }
            .btn-primary:hover{
                background: green;
                color: white;
            }
            #na{
                color: black;
                cursor: pointer;
            }
            #na:hover{
                background: whitesmoke;
                color: royalblue;
            }
            
        </style>
<script type="text/javascript">
    function nightmode(){
                  document.body.style.backgroundColor="#dee3de";
            }
            function nightmode1(){
                  document.body.style.backgroundColor="whitesmoke";
            }
    $(document).ready(function() {
    var counter = 0;

    $("#addrow").on("click", function () { var newRow = $("<tr>"); var cols =
    "";
            
            cols +='<td class="col-sm-1"><input type="text" name="unique_id" id="unique_id" class="form-control" placeholder="101"></td>';
            cols +='<td class="col-sm-1"><input type="text" name="malmatta_no" id="malmatta_no" class="form-control" value="2"></td>';
        cols += '<td class="col-sm-3"><select id="building_type" class="form-control" name="building_type" ><option>झोपडी, मातीचे घर (कच्चे घर) </option><option> टिन पत्रे केलेल्या दगड विटांच्या भिंती (अर्धपक्के) </option><option> स्लॅप विटांच्या भिंती, आर.सी.सी. (इतर पक्के)</option><option> आर.सी.सी. पद्धतीची इमारत, ग्रेनाईटची इमारत (पक्के)</option></td>';
        cols += '<td class="col-sm-1"><input type="text" class="form-control" id="building_l" name="building_l' + counter + '"/></td>';
        cols += '<td class="col-sm-1"><input type="text" class="form-control" id="building_w" name="building_w' + counter + '"/></td>';
        cols += '<td class="col-sm-1"><input type="text" class="form-control" id="building_area" name="building_area' + counter + '"/></td>';
        cols += '<td class="col-sm-1"><select id="building_maj" class="form-control" name="building_maj"><option> पहिला मजला </option><option> दुसरा मजला </option><option> तिसरा मजला </option><option> चौथा मजला </option></select></td>';
        cols += '<td class="col-sm-1"><select id="b_vapar" class="form-control" name="b_vapar"><option> निवासी </option><option> औद्योगिक </option><option> वाणिज्यिक </option></select></td>';
        cols += '<td class="col-sm-1"><input type="text" class="form-control" id="building_year" name="building_year' + counter + '"/></td>';
        cols += '<td class="col-sm-1"><button class="btn btn-primary" onclick="insertdata()">Insert</button></td>';
        cols += '<td class="col-sm-1"><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}

</script>

<script type="text/javascript">
    function calculate()
    {
        var field1=document.getElementById("foot").value;
        var field2=parseFloat(field1)*parseFloat(0.3048);
        var field3=document.getElementById("meter").value;
        var field4=parseFloat(field3)*parseFloat(3.28084);
        if(!isNaN(field2) || !isNaN(field4))
        {
            document.getElementById("answer").innerHTML="Foot in Meter " +field2 ;
            document.getElementById("answer1").innerHTML="Meter in Foot " +field4 ;
        }
    }
</script>


<script type="text/javascript">
    function insertdata()
    {
        var client_id= $("#client_id").val();
        var malmatta_no= $("#malmatta_no").val();
        var building_type= $("#building_type").val();
        var building_l= $("#building_l").val();
        var building_w= $("#building_w").val();
        var building_area= $("#building_area").val();
        var building_maj= $("#building_maj").val();
        var b_vapar= $("#b_vapar").val();
        var building_year= $("#building_year").val();

        $.ajax({
            type: "POST",
            url: "emarat_type_array.php",
            data: "client_id="+client_id+"&malmatta_no="+malmatta_no+"&building_type="+building_type+"&building_l="+building_l+"&building_w="+building_w+"&building_area="+building_area+"&building_maj="+building_maj+"&b_vapar"+b_vapar+"&building_year="+building_year,

            success:function(data){
                alert("Data saved successfully.");
            }
        })
    }
</script>
<script type="text/javascript">
    
</script>

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
                    <a onclick="nightmode()" id="ic"><span class="glyphicon glyphicon-adjust"></span></a>
                    <a onclick="nightmode1()" id="ic"><span class="glyphicon glyphicon-refresh"></span></a>

                    <a class="navbar-brand" href="index.php" id="brand"><b>कर आकारणी तपशील </b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <!-- Button trigger modal -->
<a type="button" data-toggle="modal" id="na" data-target="#exampleModal">
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
                <center><input type="submit" class="btn btn-primary btn-lg" id="nc" value="Login"></center>
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

                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="na"><b>Calculator</b>
                         <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                        <div class="container col-sm-12">
                    <li><label>Foot</label>
                        <input type="text" name="foot" id="foot" class="form-control">
                    </li>
                    <li>
                        <label>Meter</label>
                        <input type="text" name="meter" id="meter" class="form-control">
                    </li>
                    <br>
                    <li><button class="btn" onclick="calculate()">Done</button></li>
                    <hr>
                    <p id="answer">Your answer is </p>
                    <p id="answer1"></p>
                    </div>
                    
                        </ul>
                        </li>
                    <li><a href="contact.php" id="na"><span class="glyphicon glyphicon-envelope"></span><b> Contach Us</b></a></li>
                    <li><a href="#footer" id="na"><span class="glyphicon glyphicon-arrow-down"></span> Go to Bottom</a></li>
                    </ul>
                      </div>
                </div>

        </nav>
        <div class="container">
<form method="post" action="client_condatabase.php" enctype="multipart/form-data">
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
        <input type="text" name="client_id" id="client_id" class="form-control" value="<?php echo $row2[0]+1; ?>">
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
  

    <br>
  <div class="container" id="hor">
    
    <form onsubmit="return false">
    <h3><b>इमारत / जागेचा कर आकारणीचा तपशील :</b></h3>
    <table id="myTable" class=" table order-list table-bordered">
    <thead>
        <tr>
            <td><b>Client ID :</b></td>
            <td><b>मालमत्ता क्र. </b></td>
            <td><b>इमारत/जागेचा प्रकार</b></td>
            <td><b>बांधकामाची लांबी</b></td>
            <td><b>बांधकामाची रुंदी</b></td>
            <td><b>बांधकाम क्षेत्रफळ</b></td>
            <td><b>मजला क्षेत्र</b></td>
            <td><b>इमारतीचा वापर</b></td>
            <td><b>बांधकाम वर्ष</b></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-1">
                <input type="text" name="client_id" id="client_id" class="form-control" value="<?php echo $row2[0]+1; ?>">
            </td>
            <td class="col-sm-1">
                <input type="text" name="malmatta_no" id="malmatta_no" class="form-control">
            </td>
            <td class="col-sm-2">
                
                <select id="building_type" class="form-control" name="building_type">
                <option> झोपडी, मातीचे घर (कच्चे घर) </option>
                <option> टिन पत्रे केलेल्या दगड विटांच्या भिंती (अर्धपक्के) </option>
                <option> स्लॅप विटांच्या भिंती, आर.सी.सी. (इतर पक्के)</option>
                <option> आर.सी.सी. पद्धतीची इमारत, ग्रेनाईटची इमारत (पक्के)</option>
                </select>

            </td>

            <td class="col-sm-1">
                <input type="text" name="building_l"  id="building_l" class="form-control"/>
            </td>

            <td class="col-sm-1">
                <input type="text" name="building_w"  id="building_w" class="form-control"/>
            </td>

            <td class="col-sm-1">
                <input type="text" name="building_area"  id="building_area" class="form-control"/>
            </td>

            <td class="col-sm-1">
                <select id="b_vapar" class="form-control" name="b_vapar">
                <option>पहिला मजला</option>
                <option>दुसरा मजला</option>
                <option>तिसरा मजला</option>
                <option></option>
                </select>
            </td>

            <td class="col-sm-1">
                <select id="building_maj" class="form-control" name="building_maj">
                <option> निवासी </option>
                <option> औद्योगिक </option>
                <option> वाणिज्यिक </option>
                </select>
            </td>

            <td class="col-sm-1">
                <input type="text" name="building_year" id="building_year" class="form-control"/>
            </td>

            <td colspan="col-sm-1">
                <button class="btn btn-primary" onclick="insertdata()">Insert</button>
            </td>

            <td class="col-sm-1"><a class="deleteRow"></a></td>

            
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6" style="text-align: left;">
                <input type="button" class="btn btn-success btn-block " id="addrow" value="Add Row" disabled>
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
</form>
</div>


</div>

<br>
<br>

    <footer id="footer">
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
"></span>  Admin Login</a></h5>
                    </div>
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
                        <h5><a data-toggle="modal" data-target="#exampleModal" id="fl">Prints For Record</a></h5>
                    </div>
                    <div class="row">
                        <h5><a data-toggle="modal" data-target="#exampleModal" id="fl">Prints For Client</a></h5>
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
