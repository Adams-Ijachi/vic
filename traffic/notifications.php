<?php
include'dbcon.php';
if(isset($_POST['send'])){
$rid=$_POST['id'];
$recipient=$_POST['recipient'];
$message=$_POST['msg'];

//Query for updating requests data
$query = "UPDATE requests SET status='Notify',seen_status=2 WHERE id='$rid'";
if ($conn->query($query )) {

              $data = array(    
              "sender"=>"VISTRAFFIC",
              "recipients"=>$recipient,
              "message"=>"Muraho Neza, Kuri ".$recipient.", ".$message,    
            );

            $url = "https://www.intouchsms.co.rw/api/sendsms/.json";
            
            $data = http_build_query ($data);

            $username="rukundofabrice"; 
            $password="umuraza@123";
            
            //open connection
            $ch = curl_init();

            //set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
            curl_setopt($ch,CURLOPT_POST,true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $data);

            //execute post
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            //close connection
            curl_close($ch);
            
			echo"<script>alert('The Notification Has Been Sent');window.location='dashboard.php'</script>";
	}else{
		echo "<script type= 'text/javascript'>alert('Request Not Updated.');window.location=\'dashboard.php\'</script>";
	}           
}
?>