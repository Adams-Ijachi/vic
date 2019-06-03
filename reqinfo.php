<?php

require_once ('db.php');

if (isset($_POST['Problem'])) {
$prdate = date('Y-m-d h:i:s');
$msg=$_POST['msg'];




$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO  requests (rdates, msg)
VALUES ('$prdate', '$msg')";

$conn->exec($sql);
echo "<script>alert('Your Problem has been Successfully Sent '); window.location='request.php'</script>";
// }
}
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>VIS App</title>
  <link rel="shortcut icon" href="icon/cars-icon.png">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script type="text/javascript">
     function configureDropDownLists(ddl1,ddl2) {
    var kigali = ['Gasabo', 'Kicukiro', 'Nyarugenge'];
    var north = ['Burera', 'Gakenke', 'Gicumbi','Musanze','Rulindo'];
    var south = ['Gisagara', 'Huye', 'Kamonyi','Muhanga','Nyamagabe','Nyanza','Nyaruguru','Ruhango'];
    var east = ['Bugesera','Gatsibo','Kayonza','Kirehe','Ngoma','Nyagatare','Rwamagana'];
    var west = ['Karongi','Ngororero','Nyabihu','Nyamasheke','Rubavu','Rusizi','Rutsiro'];

    switch (ddl1.value) {
        case 'kigali':
            ddl2.options.length = 0;
            for (i = 0; i < kigali.length; i++) {
                createOption(ddl2, kigali[i], kigali[i]);
            }
            break;
        case 'north':
            ddl2.options.length = 0; 
        for (i = 0; i < north.length; i++) {
            createOption(ddl2, north[i], north[i],north[i],north[i]);
            }
            break;
        case 'south':
            ddl2.options.length = 0;
            for (i = 0; i < south.length; i++) {
                createOption(ddl2, south[i], south[i],south['i'],south['i'],south['i'],south['i']);
            }
            break;
        case 'east':
            ddl2.options.length = 0;
            for (i = 0; i < east.length; i++) {
                createOption(ddl2, east[i], east[i],east['i'],east['i'],east['i'],east['i']);
            }
            break;
         case 'west':
            ddl2.options.length = 0;
            for (i = 0; i < west.length; i++) {
                createOption(ddl2, west[i], west[i],west['i'],west['i'],west['i'],west['i']);
            }
            break;
            default:
                ddl2.options.length = 0;
            break;
    }

}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
</script>
</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <center><div class="card-header">Problem Description Request</div></center>
      <div class="card-body">
        <form method="POST" action="">
          <div class="form-group">
            <div class="form-row">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Describe Your Problem In Details</label>
            <div class="form-group">
                                                          <textarea name="msg" id="" class="form-control" cols="30" rows="5" required /></textarea>
                        </div>
          </div>
            <div class="text-center"><button type="submit" name="Problem" class="btn btn-primary btn-lg" required="required"><span class="fa fa-send"></span> Send Your Problem</button></div>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Back To Home</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
