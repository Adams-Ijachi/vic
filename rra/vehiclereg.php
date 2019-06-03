<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
  $user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
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

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
   <?php 
   include 'dbcon.php';
   $sql = $conn ->prepare("SELECT COUNT(seen_status) as m FROM  requests WHERE seen_status=0");
                                          $sql -> execute();
                                          $count = $sql->fetchAll(); 
                                          foreach ($count as $field);
                                          ?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="requests.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Vehicle Owner Registration</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="vehiclereg.php">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Register New Vehicle</span>
          </a>
        </li>
        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">View Requests</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-send"></i>
            <span class="nav-link-text">Send Response</span>
          </a>
        </li>-->
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
       <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <p style="color:white;margin-top: 3px;">Welcome <?php echo $row['userName']; ?></P>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"> <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">New Vehicle Registration</li>
      </ol>
      <div class="row">
        <div class="col-12">
         <div class="content-row">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-options">
                        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
                        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
                        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
                      </div>
                    </div>

      <div class="container">
    <div class="card card-register mx-auto mt-5">
      <center><div class="card-header"><font color="red" size="4"><b>RRA || VEHICLE REGISTRATION FORM</b></font></div></center>
      <div class="card-body">
        <form method="POST" action="vehiclereg.php"enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Plate Number</label>
            <input class="form-control"  type="text" name="plate" required />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Owner Full Names</label>
            <input class="form-control"  type="text" name="names" required />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Attach You National ID Copy</label>
            <input class="form-control"  type="file" name="id" required />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input class="form-control"  type="text" name="phone" required />
          </div>

                      <div class="form-group">
                          <label for="exampleInputEmail1"> Province </label>
                          <div class="form-group">
                          <select class="form-control" name="province" id="ddl" onChange="configureDropDownLists(this,document.getElementById('ddl2'))"required />
              
                          <option  value="">-----Select Your Resident Province ----</option>
                           <option value="kigali">Kigali City</option>
                           <option value="north">Northern</option>
                           <option value="south">Southern</option>
                           <option value="east">Eastern</option>
                           <option value="west">Western</option>
                      </select>
                        </div>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">District </label>
                          <div class="form-group">
                          <select class="form-control" name="district" id="ddl2"/>
                          <option  value="">-----Select Your Resident District ----</option>
                      </select>
                        </div>
                        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Sector</label>
            <input class="form-control" type="text" name="sector" required />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Imatriculation Number</label>
            <input class="form-control" type="text" name="vim" required />
          </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Vehicle Category </label>
                          <div class="form-group">
                          <select class="form-control" name="vcategory" id="ddl2" required />
                          <option  value="">-----Select Your Vehicle Category ----</option>
                          <option>Motobike</option>
                          <option>Car</option>
                      </select>
                        </div>
                        </div>
                        <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Model</label>
            <input class="form-control" type="text" name="vmodel" required />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Motor Number (Numero du Motel)</label>
            <input class="form-control" type="text" name="mnumber" required />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Frame Number (Numero du Chassis)</label>
            <input class="form-control" type="text" name="fnumber" required />
          </div>
          <div class="form-group">
                          <label for="exampleInputEmail1">Vehicle Manufactured Year </label>
                          <div class="form-group">
                          <select class="form-control" name="myear" id="ddl2" required />
                          <option  value="">-----Select Your Vehicle Manufactured Year ----</option>
                          <option>  <?php
                        $y = date("Y", strtotime("+8 HOURS"));
                        for($year = 1950; $y >= $year; $y--){
                          echo "<option value = '".$y."'>".$y."</option>";
                        }
                          ?></option>
                      </select>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Vehicle Bougth Year </label>
                          <div class="form-group">
                          <select class="form-control" name="byear" id="ddl2" required />
                          <option  value="">-----Select Your Vehicle Bought Year ----</option>
                          <option>  <?php
                        $y = date("Y", strtotime("+8 HOURS"));
                        for($year = 1950; $y >= $year; $y--){
                          echo "<option value = '".$y."'>".$y."</option>";
                        }
                          ?></option>
                      </select>
                        </div>
                        </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Attach Your RRA TAX Clearence Copy</label>
            <input class="form-control"  type="file" name="rratc" required />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Attach Your Insurence Clearence Copy</label>
            <input class="form-control"  type="file" name="insc" required />
          </div>
           
            <div class="text-center"><button type="submit" name="name" class="btn btn-primary btn-lg" required="required"><span class="fa fa-send"></span> Register</button></div>
        </form>
                    </div>
                  </div>

                </div>
        </div>
      </div>
    </div>
       <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © <?php echo date('Y'); ?> Vehicle Investigation System</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>
</html>

<?php
include_once "db.php"; 
        if(isset($_POST['name']))

            {
      
move_uploaded_file($_FILES["id"]["tmp_name"],"attachments/" . $_FILES["id"]["name"]);
move_uploaded_file($_FILES["rratc"]["tmp_name"],"attachments/" . $_FILES["rratc"]["name"]); 
move_uploaded_file($_FILES["insc"]["tmp_name"],"attachments/" . $_FILES["insc"]["name"]);       

$dates = date('Y-m-d h:i:s');
$plate=$_POST['plate'];
$names=$_POST['names'];
$id=$_FILES["id"]["name"];
$phone = "+25".$_POST['phone'];
$province=$_POST['province'];
$district=$_POST['district'];
$sector=$_POST['sector'];
$vim=$_POST['vim'];
$vcategory=$_POST['vcategory'];
$vmodel=$_POST['vmodel'];
$mnumber=$_POST['mnumber'];
$fnumber=$_POST['fnumber'];
$myear=$_POST['myear'];
$byear=$_POST['byear'];
$rratc=$_FILES["rratc"]["name"];
$insc=$_FILES["insc"]["name"];
      
    //$count = $conn->countOf("customer_details", "customer_name='$names'");
    //if($count==1)
    // {
    //echo "<font color=red> Dublicat Entry. Please Verify</font>";
    //  }
    // else
    // {
        
      if($conn->query("insert into customer_details values(NULL,'$plate','$names','$id','$phone','$province','$district','$sector','$vim','$vcategory','$vmodel','$mnumber','$fnumber','$myear','$byear','$rratc','$insc')"))
      echo "<br><center><font color=green size=+1 > [ $vmodel ] Vehicle Registered Successfully!</font>" ;


      else
      echo "<br><font color=red size=+1 ><center>Problem in Adding Vehicle!</font>" ;
      
      //}
      
      
      }
        
      ?>