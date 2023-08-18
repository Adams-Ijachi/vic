<?php


$con = new mysqli("127.0.0.1","root","","vis");
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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

$qry = $con->query("UPDATE customer_details SET id_num='$idm' WHERE id='$ID'");
    if(!$qry)
    {
        die("Query Failed: ". $con->error);
    }
    else{
        echo "<script>alert('Your Record has been Successfully Upadated '); window.location='requests.php'</script>";

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
$qry=$con->query("UPDATE customer_details SET revenue='$rratc' WHERE id='$ID'");
if(!$qry)
{
    die("Query Failed: ". $con->error);
}
else{
    echo "<script>alert('Your Record has been Successfully Upadated '); window.location='requests.php'</script>";

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
$qry=$con->query("UPDATE customer_details SET insurance='$insc' WHERE id='$ID'");
if(!$qry)
{
    die("Query Failed: ". $con->error);
}
else{
    echo "<script>alert('Your Record has been Successfully Upadated '); window.location='requests.php'</script>";

}

}
?>

<?php
$qry= $con->query("UPDATE customer_details SET plaque='$plate',customer_name='$names',tel='$phone',province='$province',district='$district',sector='$sector',vim='$vim',category='$vcategory',model='$vmodel',mnumber='$mnumber',fnumber='$fnumber',myear='$myear',byear='$byear' WHERE id='$ID'");
if(!$qry)
{
die("Query Failed: ". $con->error);
}
else{
echo "<script>alert('Your Record has been Successfully Upadated '); window.location='requests.php'</script>";

}      
?>
