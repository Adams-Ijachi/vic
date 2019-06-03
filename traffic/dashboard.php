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
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
   <?php 
   include 'dbcon.php';
   $sql = $conn ->prepare("SELECT COUNT(seen_status) as m FROM  requests WHERE seen_status=1");
                                          $sql -> execute();
                                          $count = $sql->fetchAll(); 
                                          foreach ($count as $field);
                                          ?>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Vehicle Investigation System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Dashboard</span>          </a>        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="View Requests">
          <a class="nav-link" href="requests.php">
            <i class="fa fa-fw fa-envelope"></i>
                                           
            <span class="nav-link-text">View Requests  <span class="badge" style="background-color: darkred;"><?php echo $field['m'];?></span>          </a>        
			</li>
				 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="View Requests">
          <a class="nav-link" href="sms_request.php">
            <i class="fa fa-fw fa-mobile"></i>
   <?php 
   include 'dbcon.php';
   $sql = $conn ->prepare("SELECT COUNT(Id) as mm FROM  messagein");
                                          $sql -> execute();
                                          $count = $sql->fetchAll(); 
                                          foreach ($count as $field);
                                          ?>                              
            <span class="nav-link-text">Road SMS Requests  <span class="badge" style="background-color: darkred;"><?php echo $field['mm'];?></span>
          </a>
        </li>
        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Check in RRA">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Check in RRA</span>
          </a>
        </li>-->
   <?php 
   include 'dbcon.php';
   $sql = $conn ->prepare("SELECT COUNT(seen_status) as res FROM  requests WHERE seen_status=2");
                                          $sql -> execute();
                                          $count = $sql->fetchAll(); 
                                          foreach ($count as $field);
                                          ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Send Response">
          <a class="nav-link" href="responded.php">
            <i class="fa fa-fw fa-send"></i>
            <span class="nav-link-text">View Pending Request <span class="badge" style="background-color: darkred;"><?php echo $field['res'];?></span></a>
			</li>
		

        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Send Response">
          <a class="nav-link" href="roadpolice.php">
            <i class="fa fa-fw fa-send"></i>
            <span class="nav-link-text">SMS Notify Road Police</span></a>
			</li>-->
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>            </li>
            <li>
              <a href="#">Second Level Item</a>            </li>
            <li>
              <a href="#">Second Level Item</a>            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>                </li>
                <li>
                  <a href="#">Third Level Item</a>                </li>
                <li>
                  <a href="#">Third Level Item</a>                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>          </a>        </li>
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
            <a class="dropdown-item small" href="#">View all messages</a>          </div>
        </li>
        <li class="nav-item dropdown">
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <p style="color:white;margin-top: 3px;">Welcome <?php echo $row['userName']; ?></P>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"> <i class="fa fa-fw fa-sign-out"></i>Logout</a>        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>        </li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-car"></i>              </div>
              <div class="mr-5">Total Cars in Case</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-car"></i>              </span>            </a>          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>              </div>
              <div class="mr-5">Total Cars in Process</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>              </div>
              <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div>
      </div>
      <!-- Area Chart Example-->

      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          
          <!-- Card Columns Example Social Feed-->
         
           
           
            
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          
          <!-- Example Notifications Card-->
          </div>
        </div>
      </div>
      <!-- Example DataTables Card-->
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © <?php echo date('Y'); ?> Vehicle Investigation System</small>        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>
</html>