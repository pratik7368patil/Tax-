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
  
  $select_query= "SELECT * from clients inner join client_property on client_property.unique_id=clients.unique_id  inner join client_building on client_building.unique_id=clients.unique_id 
  where clients.unique_id=(SELECT unique_id from clients WHERE client_name='$fetch_info_1' AND village_name='$fetch_info_2') ";
  $select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
  
  $row = mysqli_fetch_array($select_query_result);

//for tax accordint to village

  $select_query_1= "SELECT * FROM village inner join bharankan on bharankan.village_name=village.village_name inner join divakar on divakar.village_name=village.village_name inner join emaratvkar_dar_1_mulya on emaratvkar_dar_1_mulya.village_name=village.village_name inner join emaratvkar_dar_2_kardar on emaratvkar_dar_2_kardar.village_name=village.village_name inner join ep on ep.village_name=village.village_name inner join kg on kg.village_name=village.village_name inner join mb on mb.village_name=village.village_name inner join namuna9 on namuna9.village_name=village.village_name inner join panikar on panikar.village_name=village.village_name inner join pg on pg.village_name=village.village_name WHERE village.village_name=(SELECT village_name from village WHERE village_name='$fetch_info_2')";

$select_query_result_1= mysqli_query($con, $select_query_1) or die(mysqli_error($con));
$row_1 = mysqli_fetch_array($select_query_result_1);

?>

<!DOCTYPE html>
<html>
    <head>
      
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="css/index.css" media="all">
        <link rel="icon" href="img/rc-icon.png">


        <title>Rutuja Computers</title>

        
    </head>
    <body>
        
        <br>
        <br>
<div class="container">
    <div class="row">
        
            <center><b>नियम ३२ (१)</b></center>
        
    </div>
    <br>
    <div class="row">
        <div class="col-sm-7">
            <p><b>ग्राम पंचायत </b>: <?php echo $row['gram_name'] ?> </p>
        </div>
        
        <div class="col-sm-3">
            <p><b>तालुका</b>: मलकापूर</p>
        </div>
        <div class="col-sm-2">
            <p><b>जिल्हा</b>: बुलढाणा</p>
        </div>
    
    </div>
    <div class="row">
        
        <div class="col-sm-2">
            <p><b>गावं/मोहल्ला</b>: <?php echo $row['village_name'] ?> </p>
        </div>
        <div class="col-sm-10">
         <center>सण: २०१६-२०१७ ते २०१९-२०२० <b>या वर्षासाठीकर आकारणी नोंद वही </b></center>
        </div>
    
    </div>
    <br>
    <div class="row">
        <table class="table table-bordered">
        <tbody>
            <tr>
                
                    <th rowspan="2">अ.क्र</th>
              

              
                   <th rowspan="2">रस्त्याचे नाव</th> 
               

               
                    <th rowspan="2">सिटी सर्वे गट</th>
               

             
                    <th rowspan="2">मालमत्ता क्रमांक</th>
                

              
                    <th rowspan="2">मालकाचे नाव</th>
                

                
                    <th rowspan="2">भोगवटदाराचे नाव</th>
                
                    <th rowspan="2">मालमत्तेचे वर्णन</th>
               

               
                    <th rowspan="2">मिळकत बांधकामाचे वर्ष</th>
               

                
                    <th rowspan="2">एकूण क्षेत्रफळ</th>
             
                   <th colspan="3"><center>रेडीरेकनर दर प्रती चौ. मी. (रुपये)</center></th>
                      
                
               
                   <th rowspan="2">घसारा दर</th>
                
                    <th rowspan="2">इमारतीचा वापरानुसार भारांक</th>
                

            </tr>
            <tr>
                <th>जमीन (खाली जागा)</th>
                <th>इमारत</th>
                <th>बांधकाम</th>
            </tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
            </tr>

            <tr>
                <th><?php echo $row['client_id'] ?></th>
                <th> </th>
                <th><?php echo $row['sg_no'] ?></th>
                <th> <?php echo $row['malmatta_no'] ?></th>
                <th> <center><?php echo $row['client_name'] ?>
                    ___________________________________
                    <br>
                    <?php echo $row['client_wife'] ?>
                </center>
                </th>
                <th> <?php echo $row['bhog_name'] ?></th>
                <th> <?php echo $row['emarat_type'] ?></th>
                <th> <?php echo $row['b_year'] ?></th>
                <th><center>पु.प. * उ.द.<br>__________<br><?php echo $row['b_lambi'] ?>x<?php echo $row['b_rundi'] ?></center>
                 <br>
                 <br>
                 <br>
                 <br>
                 <?php
                 $mtr='Meter';
                 $num1=$row['b_lambi'];
                 $num2=$row['b_rundi'];
                 $num6=$row['total'];
                   if ($row['plotcal']==$mtr ) {
                    $num4=$num1*3.28084;
                    $num5=$num2*3.28084;
                    $num6=$num6*3.28084;
                    $num3=$num1*$num2;
                       
                   }else{
                    $num3=$num1*$num2;
                   }
                 ?>
                 <center>एकूण चौ-फूट <br>__________<br><?php echo $num3 ?></center>

                </th>
                <th>
                   <?php
                         $no2=$row['b_total_area'];
                         $khali_jaga=$num6-$no2; 
                    ?> 
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <center>चौ-फूट <br>__________<br><?php echo $khali_jaga ?></center>
                </th>
                <th></th>
                <th>
                    <?php 
                        
                    ?>
                    
                    <center>पु.प. * उ.द.<br>__________<br> -(10*10)</center>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                     ___________
                    <br>
                    <center>100.00</center>

                </th>
                <th>100</th>
                <th>1</th>
            </tr>

            <tr>
                <th colspan="8" rowspan="2"></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                
            </tr>

            <tr>
                <th></th> 
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                
            </tr>

            <tr>
                
                <th rowspan="2">भांडवली मूल्य (रुपये)</th>
                <th rowspan="2">कराचे दर (पैसे)</th>
                <th colspan="5"><center>कराचे रक्कम (रुपये)</center></th>
                <th colspan="5"><center>अपिलाचे निकाल आणि त्यानंतर केलेले फेरफार (रुपये)</center></th>
                <th colspan="2" rowspan="2"><center>नंतर वाढ किंवा घट झालेल्या बाबतीत आदेशाच्या संदर्भात शेरा</center></th>
            </tr>
            <tr>
                <th>घरपट्टी</th>
                <th>दिवाबत्ती</th>
                <th>आरोग्यकर</th>
                <th>पाणीपट्टी</th>
                <th>एकूण</th>
                <th>घरपट्टी</th>
                <th>दिवाबत्ती</th>
                <th>आरोग्यकर</th>
                <th>पाणीपट्टी</th>
                <th>एकूण</th>
            </tr>

            <tr>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
                <th>21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th colspan="2">27</th>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="2">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </th>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="2"></th>
            </tr>
           </tbody>
        </table>

                <div class="row">
                    <div class="col-sm-2">
                        <label>शौचालय : <?php echo $row['shauchalay'] ?></label>
                    </div>
                    <div class="col-sm-2">
                        <label>चतुर्सिमा : <?php echo $row['jagechi_chsima'] ?></label>
                    </div>
                    <div class="col-sm-2">
                        <label>पूर्व : <?php echo $row['purves'] ?></label>
                    </div>
                    <div class="col-sm-2">
                        <label>पश्चिम : <?php echo $row['pachhimes'] ?></label>
                    </div>
                    <div class="col-sm-2">
                        <label>उत्तर : <?php echo $row['uttares'] ?></label>
                    </div>
                    <div class="col-sm-2">
                        <label>दक्षिण : <?php echo $row['dakshines'] ?></label>
                    </div>
                
                </div>
                
            
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
    <center>
    <div class="col-sm-4">
        <label>दिनांक : <p  id="date"></p></label>
    </div>
    <div class="col-sm-4">
        <label>ग्रामपंचायत चा शिक्का</label>
    </div>
    <div class="col-sm-4">
        <lable> <b>सचिव/सरपंच ग्रामपंचायत </b></lable> 
        <br>मलकापूर ग्रामीण
    
    </div>

</center>
</div>

</div>
<br>
<hr>
<div class="container">
    <center>
<button class="btn btn-success" onclick="myfunction()">Print</button>
</center>
</div>
<br>
<script type="text/javascript">
    function myfunction() {
        window.print();
    }
</script>
    </body>
    </html>