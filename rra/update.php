<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
die("connection to database failed".mysql_error());
}
/* selecting the database "lafraternite" */
$dataselect = mysql_select_db("vis",$con);
if(!$dataselect)
{
die("Database namelist not selected".mysql_error());
}

?>
<?php
$ID = $_POST['id'];
$plate=$_POST['plaque'];
$names=$_POST['customer_name'];
$idm=$_FILES["id_num"]["name"];
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
$rratc=$_FILES["revenue"]["name"];
$insc=$_FILES["insurance"]["name"];
?>
<?php 
if($idm)
{
$name=$_FILES['id_num']['name'];
$tmp=$_FILES['id_num']['tmp_name'];
$err=$_FILES['id_num']['error'];
$uploadDir="attachments";
if($err==0)
{
move_uploaded_file($tmp, "attachments/$name");
}
$qry=mysql_query("UPDATE customer_details SET id_num='$idm' WHERE id='$ID'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
}

if($rratc)
{
$name=$_FILES['revenue']['name'];
$tmp=$_FILES['revenue']['tmp_name'];
$err=$_FILES['revenue']['error'];
$uploadDir="attachments";
if($err==0)
{
move_uploaded_file($tmp, "attachments/$name");
}
$qry=mysql_query("UPDATE customer_details SET revenue='$rratc' WHERE id='$ID'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
}

if($insc)
{
$name=$_FILES['insurance']['name'];
$tmp=$_FILES['insurance']['tmp_name'];
$err=$_FILES['insurance']['error'];
$uploadDir="attachments";
if($err==0)
{
move_uploaded_file($tmp, "attachments/$name");
}
$qry=mysql_query("UPDATE customer_details SET insurance='$insc' WHERE id='$ID'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
}
?>

<?php
$qry=mysql_query("UPDATE customer_details SET plaque='$plate',customer_name='$names',tel='$phone',province='$province',district='$district',sector='$sector',vim='$vim',category='$vcategory',model='$vmodel',mnumber='$mnumber',fnumber='$fnumber',myear='$myear',byear='$byear' WHERE id='$ID'");
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else{
echo "<script>alert('Your Record has been Successfully Upadated '); window.location='requests.php'</script>";

}      
?>
