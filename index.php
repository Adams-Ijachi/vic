<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VIS App</title>
  <link rel="shortcut icon" href="icon/cars-icon.png">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.html"><h1><span>vehicle investigation</span> system</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.php" class="active"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li role="presentation"><a type="button" data-toggle="modal" href="#addPage">SEND REQUEST FOR STOLEN CAR</a></li>
				<li role="presentation"><a href="rra/index.php" class="active"><span class="glyphicon glyphicon-book"></span> RRA</a></li>
				<li role="presentation"><a href="police/index.php" class="active"><span class="glyphicon glyphicon-book"></span> NATIONAL POLICE</a></li>
				<li role="presentation"><a href="traffic/index.php" class="active"><span class="glyphicon glyphicon-book"></span> TRAFFIC OFFICES</a></li>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h2 class="animation animated-item-1">Welcome <span>on VEHICLE INVESTIGATION SYSTEM </span></h2>
                  <p class="animation animated-item-2">You can send a request to traffic police and you will get a response via SMS in you mobile phone about your stolen car and related information about case.</p>
                </div>
              </div>

              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="images/v1.png" class="img-responsive">
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  </section>
  
  <!-- Modal-->
	<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="request.php" method="post">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">CLAIM FOR VEHICLE</h4>
		  </div>
		  <div class="modal-body">
		  
			<div class="form-group row">
			  <label for="inputPage" class="col-sm-4 col-form-label" style="color:#000000;">Plate Number</label>
			  <div class="col-sm-12">
				<input name="plaque"type="text" class="form-control" id="inputPage" placeholder="Enter Plate Number" required>
			  </div>
			</div>
			
		</div><!--The End-->
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<input type="submit" class="btn btn-primary" value="Send Request " name="submit">
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<!-- addPage-->

  <footer>
    <div class="footer">
      <div class="container">

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            <center>Copyright <?php echo date('Y'); ?>  &copy; Vehicle Investigation System</center>
          </div>
        </div>
      </div>

      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>

</body>

</html>
