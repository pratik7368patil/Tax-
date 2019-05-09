<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>  
<?php
$con = mysqli_connect("127.0.0.1","root","","rutuja computers gram") or die(mysqli_error($con));

$fetch_info_1= mysqli_real_escape_string($con, $_POST['client_name']);
$fetch_info_2= mysqli_real_escape_string($con, $_POST['village_name']);
  //select query for clients
  $select_query= "SELECT * from clients
    where client_name='$fetch_info_1' and village_name='$fetch_info_2' ";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
  
  $row = mysqli_fetch_array($select_query_result);

    //select query for thakbaki
    $select_query_2= "SELECT * FROM thakbaki WHERE client_name='$fetch_info_1' and village_name='$fetch_info_2' ";
    $select_query_result_2= mysqli_query($con, $select_query_2) or die(mysqli_error($con));
  
  $row_2= mysqli_fetch_array($select_query_result_2);

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

        <style type="text/css">
          #t{
            text-align: right;
          }
        </style>
    </head>
    <body>

        <br>
        <br>
        <center><h5>नमुना ९ क </h5>
            <h4>नियम ३२ (५) पहा करांची मागणी पावती </h4>
        </center>
<br>
        <div class="container">
            <div class="row">
              <div class="col-sm-4">
                 <label>ग्रामपंचायत : </label><?php echo $row['gram_name'] ?> 
              </div>
              
              <div class="col-sm-8">
                  <center><label>मागणी पावती क्र : </label></center>
              </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                  <label>मालकाचे नाव :</label><?php echo $row['client_name'] ?>  
                </div>
                <div class="col-sm-4">
                    <label>साल :</label>
                </div>
                <div class="col-sm-4">
                    <label>दिनांक :</label>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                 <label> घर क्र. : </label><?php echo $row_2['ghar_no'] ?>
              </div>
              
              <div class="col-sm-8">
                  <label>यांजकडून पुढील करांची रक्कम वसुलीयोग्य आहे </label>
              </div>
            </div>
            <div class="row">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th rowspan="2"><center>कराचे नाव</center></th>
                        <th colspan="3"><center>वसलं पात्र रकमा</center></th>
                    </tr>
                    <tr>
                        <th><center>थकबाकी रुपये पै.</center></th>
                        <th><center>चालू रुपये पै.</center></th>
                        <th><center>एकूण रपये पै.</center></th>
                    </tr>
                    <tr>
                        <th>
                            (१) घरपट्टी <br>
                            (२) दिवाबत्ती कर <br>
                            (३) आरोग्य कर <br>
                            (४) पाणीपट्टी <br>
                            (५) नोटीस फी <br>
                            (६) वॊरंट फी <br>
                        </th>
                        <th> <center>
                          <?php echo $row_2['thak_gharpatti']; ?><br>
                          <?php echo $row_2['thak_divabatti']; ?><br>
                          <?php echo $row_2['thak_akar']; ?><br>
                          <?php echo $row_2['thak_panikar']; ?><br>
                        </center>
                          

                        </th>
                        <th><center>
                          <?php echo $row_2['chalu_gharpatti']; ?><br>
                          <?php echo $row_2['chalu_divabatti']; ?><br>
                          <?php echo $row_2['chalu_akar']; ?><br>
                          <?php echo $row_2['chalu_panikar']; ?><br>
                          <?php echo $row_2['notice_fee']; ?><br>
                          <?php echo $row_2['varant_fee']; ?><br>
                        </center>
                         </th>
                        <th><center>
                          <?php echo $row_2['ekun_gharpatti']; ?><br>
                          <?php echo $row_2['ekun_divabatti']; ?><br>
                          <?php echo $row_2['ekun_akar']; ?><br>
                          <?php echo $row_2['ekun_panikar']; ?><br>
                          <?php echo $row_2['notice_fee']; ?><br>
                          <?php echo $row_2['varant_fee']; ?><br>
                        </center>
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th id="t">एकूण :</th>
                        <th><center><?php echo $row_2['ekun_gharpatti']+$row_2['ekun_divabatti']+$row_2['ekun_akar']+$row_2['ekun_panikar']+$row_2['notice_fee']+$row_2['varant_fee'] ?></center></th>
                    </tr>
                </tbody>
            </table>
           </div>

           <div class="row">
            <label>दिनांक : </label>
           </div>
           <div class="row">
            <p>हे बिल आपणास प्राप्त झाल्यापासून देय रकमेचा भरणा १५ दिवसाच्या आत करावा. <br>अन्यथा ग्रामपंचायत अधिनियमाच्या कलम क्र. १२९(२) अन्वये आपल्यावर मागणी बजावण्यात येईल.</p>
           </div>
<br>
<br>
<br>
<br>
            <div class="row" style="text-align: right;">
                सचिव/सरपंच लिपिकारी आद्याक्षरी
            </div>
        </div>
<br>
<br>
<br>
<br>

    </body>
    </html>
