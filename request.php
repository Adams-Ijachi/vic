<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>

</style>
<title>VIS App !</title>
<link rel="shortcut icon" href="icon/cars-icon.png">
 <!-- Bootstrap core CSS-->
  <link href="design/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="design/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="jquery.date_input.js"></script>


<script type="text/javascript">$(function() {
  $("#datefield").date_input();
   $("#due").date_input();
});</script>

<script type='text/javascript' src='jquery.autocomplete.js'></script>

<script type='text/javascript' src='localdata.js'></script>

<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<link rel="stylesheet" type="text/css" href="lib/thickbox.css" />
  
<script type="text/javascript">
$().ready(function() {

  function log(event, data, formatted) {
    $("<li>").html( !data ? "No match!" : "Selected: " + formatted).appendTo("#result");
  }
  
  function formatItem(row) {
    return row[0] + " (<strong>id: " + row[1] + "</strong>)";
  }
  function formatResult(row) {
    return row[0].replace(/(<.+?>)/gi, '');
  }
  
  


  
  
  $("#customer").autocomplete("customer.php", {
    width: 160,
    autoFill: true,
    selectFirst: false
  });
  

  
});



 
    
    
    $(document).ready(function() {
      // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
       $("#billnumber").focus();
      
       $("#customer").blur(function()
      {
      
         $.post('check_customer_details.php', {stock_name1: $(this).val() },
        function(data){
        
                $("#customer_name").val(data.customer_name);
                $("#idnum").val(data.idnum);
                $("#tel").val(data.tel);
                $("#province").val(data.province);
                $("#district").val(data.district);
                $("#sector").val(data.sector);
                $("#vim").val(data.vim);
                $("#category").val(data.category);
                $("#model").val(data.model);
                $("#mnumber").val(data.mnumber);
                $("#fnumber").val(data.fnumber);
                $("#myear").val(data.myear);
                $("#byear").val(data.byear);
                $("#revenue").val(data.revenue);
                $("#insurance").val(data.insurance);
                $("#msg").val(data.msg);
                if(data.address!=undefined)
                $("#0").focus();
                
              }, 'json');
              
              
          

      
      });
      
    });
  </script> 
</head>

<body>

<?php
include_once "db.php"; 
$pl=$_POST['plaque'];
$result = $conn->prepare("SELECT * FROM  customer_details WHERE plaque='$pl'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['id'];
?>
        
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <center><div class="card-header">Provide Full Details Information of Stolen Vehicle</div></center>
      <div class="card-body">
        <form method="POST" action="request.php"enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
            </div>
          </div>
		   <div class="form-group">
            <input name="id" class="form-control"  type="hidden" name="plate" id="customer" value="<?php echo $row ['id']; ?>"/>
            </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Plate Number</label>
            <input name="plaque" class="form-control"  type="text" name="plate" id="customer" value="<?php echo $row ['plaque']; ?>" readonly="true"/>
            </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Owner Full Names</label>
            <input name="customer_name" class="form-control"  type="text" name="names" id="customer_name" required value="<?php echo $row ['customer_name']; ?>" readonly="true"/>
          </div>

          <!--<div class="form-group">
            <label for="exampleInputEmail1">ID Number* (Required)</label>
            <input class="form-control"  type="file" name="id_num" id="idnum" required />
          </div>-->

          <div class="form-group">
            <label for="exampleInputEmail1"><font color="red"><b>Current Telephone Number</label>
            <input name="tel" class="form-control"  type="text" name="tel" id="tel" required value="<?php echo $row ['tel']; ?>" /></b></font>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Province</label>
            <input name="province" class="form-control"  type="text" name="province" id="province" required value="<?php echo $row ['province']; ?>" readonly="true"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">District</label>
            <input name="district" class="form-control"  type="text" name="district" id="district" required value="<?php echo $row ['district']; ?>" readonly="true"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Sector</label>
            <input name="sector" class="form-control"  type="text" name="sector" id="sector" required value="<?php echo $row ['sector']; ?>" readonly="true"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Imatriculation Number</label>
            <input name="vim" class="form-control"  type="text" name="vim" id="vim" required value="<?php echo $row ['vim']; ?>" readonly="true"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Category</label>
            <input name="category" class="form-control"  type="text" name="category" id="category" required value="<?php echo $row ['category']; ?>" readonly="true">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Model</label>
            <input name="model" class="form-control"  type="text" name="model" id="model" required value="<?php echo $row ['model']; ?>" readonly="true"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Motor Number (Numero du Motel)</label>
            <input name="mnumber" class="form-control"  type="text" name="mnumber" id="mnumber" required value="<?php echo $row ['mnumber']; ?>" readonly="true"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Frame Number (Numero du Chassis)</label>
            <input name="fnumber" class="form-control"  type="text" name="fnumber" id="fnumber" required value="<?php echo $row ['fnumber']; ?>" readonly="true"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Manufactured Year</label>
            <input name="myear" class="form-control"  type="text" name="myear" id="myear" required value="<?php echo $row ['myear']; ?>" readonly="true"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Bougth Year</label>
            <input name="byear" class="form-control"  type="text" name="byear" id="byear" required value="<?php echo $row ['byear']; ?>" readonly="true"/>
          </div>

          <!--<div class="form-group">
            <label for="exampleInputEmail1">Attach Your RRA TAX Clearence Copy* (Required)</label>
            <input name="revenue" class="form-control"  type="file" name="revenue" id="revenue" required/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Attach Your Insurence Clearence Copy* (Required)</label>
            <input name="insurance" class="form-control"  type="file" name="insurance" id="insurance" required/>
          </div>-->

          <div class="form-group">
            <label for="exampleInputEmail1">Describe Your Problem In Details* (More Required)</label>
            <div class="form-group">
            <textarea name="msg" id="" class="form-control" cols="30" rows="5" required /></textarea>
                        </div>
          </div>

          <div class="text-center"><button type="submit" name="name" class="btn btn-primary btn-lg" required="required"><span class="fa fa-send"></span> Send Request</button></div>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Cancel</a>
        </div>

<?php } ?>   


<?php
include_once "db.php"; 
if(isset($_POST['name']))
{
      
//move_uploaded_file($_FILES["id_num"]["tmp_name"],"attachments/" . $_FILES["id_num"]["name"]);
//move_uploaded_file($_FILES["revenue"]["tmp_name"],"attachments/" . $_FILES["revenue"]["name"]); 
//move_uploaded_file($_FILES["insurance"]["tmp_name"],"attachments/" . $_FILES["insurance"]["name"]);       

$dates = date('Y-m-d h:i:s');
$plate=$_POST['plaque'];
$names=$_POST['customer_name'];
//$id=$_FILES["id_num"]["name"];
$phone =$_POST['tel'];
$province=$_POST['province'];
$district=$_POST['district'];
$sector=$_POST['sector'];
$vim=$_POST['vim'];
$vcategory=$_POST['category'];
$vmodel=$_POST['model'];
$mnumber=$_POST['mnumber'];
$fnumber=$_POST['fnumber'];
$myear=$_POST['myear'];
$byear=$_POST['byear'];
//$rratc=$_FILES["revenue"]["name"];
//$insc=$_FILES["insurance"]["name"];
$msg=$_POST['msg'];
   
if($conn->query("INSERT INTO requests values(NULL,'$plate','$names','$phone','$province','$district','$sector','$vim','$vcategory','$vmodel','$mnumber','$fnumber','$myear','$byear','$msg',NOW(),'Not Responded',0)"))
echo "<script>alert('Your Request has been Successfully Sent '); window.location='index.php'</script>";


else
echo "<br><font color=red size=+1 ><center>Problem of sending Request!</font>" ;
      
//}
      
      
}        
?>








                      
                     