<?php

require_once ('db.php');

if (isset($_POST['Submit'])) {

move_uploaded_file($_FILES["id"]["tmp_name"],"attachments/" . $_FILES["id"]["name"]);
move_uploaded_file($_FILES["rratc"]["tmp_name"],"attachments/" . $_FILES["rratc"]["name"]);	
move_uploaded_file($_FILES["insc"]["tmp_name"],"attachments/" . $_FILES["insc"]["name"]);				

$dates = date('Y-m-d h:i:s');
$names=$_POST['names'];
$plateno=$_POST['plateno'];
$id=$_FILES["id"]["name"];
$phone = "+25".$_POST['phone'];
$province=$_POST['province'];
$district=$_POST['district'];
$sector=$_POST['sector'];
$vcategory=$_POST['vcategory'];
$vmodel=$_POST['vmodel'];
$mnumber=$_POST['mnumber'];
$fnumber=$_POST['fnumber'];
$myear=$_POST['myear'];
$rratc=$_FILES["rratc"]["name"];
$insc=$_FILES["insc"]["name"];
$msg=$_POST['msg'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO  requests (plateno,rdate, names, id,phone,province,district,sector,vim,vcategory,vmodel,mnumber,fnumber,myear,byear,msg)
VALUES ('$plateno','$dates', '$names', '$id', '$phone','$province','$district','$sector','$vcategory','$vmodel','$mnumber','$fnumber','$myear','$rratc','$insc','$msg')";

$conn->exec($sql);
echo "<script>alert('Your Request has been Successfully Sent '); window.location='index.php'</script>";
// }
}
// }
?>