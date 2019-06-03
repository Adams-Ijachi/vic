<?php
include'dbcon.php';
if(isset($_POST['send'])){
$rid=$_POST['id'];
$recipient=$_POST['recipient'];
$message=$_POST['msg'];

//Query for updating requests data
$query = "UPDATE requests SET msg='$message',status='Bingo',seen_status=3 WHERE id='$rid'";
if ($conn->query($query )) {   
			echo"<script>alert('The Notification Has Been Sent');window.location='dashboard.php'</script>";
	}else{
		echo"<script>alert('The Notification Not Sent');window.location='dashboard.php'</script>";
	}           
}
?>