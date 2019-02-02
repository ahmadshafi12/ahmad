<?php include("classes/db_connection.php");
$obj=new DBConnection();?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR - Responsive HTML &amp; Bootstrap Template</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.php"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
				</div>


				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
				

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Home</a></li>
					        <li><a class="menu" href="#about">Products</a></li>
					        
					        <li><a class="menu" href="#contact"> contact us</a></li>

					      </ul>


					    </div><!-- /navbar-collapse -->
					    <div class="col-xs-12" style="float: right;">			      		        			      <form class="navbar-form" action="search.php" method="post" role="search" style="float: right;">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="code" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form></div>

	

					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->
	<section class="slider" id="home">
		<div class="container-fluid">
			
			    </div>
			<br>
			<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



	</section>

	<!-- end of slider section -->

	<!-- about section -->
	
	<div>
<h1 style="text-align:center; font-size: 70px;" id="about">Place Your Order</h1>
</div>
	<div class="row">
							<div class="col-xs-12">
								
		        	 <form action="processplaceorder.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data" style="text-align:center;"
		        	 " >
									
							<input type="hidden" id="form-field-1" name="id"  class="col-xs-10 col-sm-5" value="<?php echo $result['id']; ?>" />


                   <div class="form-group">
							
								
								<div class="form-group"  >
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Code</label>
										<div class="col-sm-9">
											<input type="text"  id="form-field-1" name="code" class="col-xs-10 col-sm-5" />
												
										</div>
								</div>
																<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Area</label>
										<div class="col-sm-9">
											<input type="text"  id="form-field-1" name="area" class="col-xs-10 col-sm-5" />
											
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product</label>
										<div class="col-sm-9">
											<input type="text"  id="form-field-1" name="product" class="col-xs-10 col-sm-5" />
												
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Unit</label>
										<div class="col-sm-9">
											<input type="text"  id="form-field-1" name="unit" class="col-xs-10 col-sm-5" />
												
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Price</label>
										<div class="col-sm-9">
											<input type="text"  id="form-field-1" name="price" class="col-xs-10 col-sm-5" />
												
										</div>
								</div>
					

									<hr>
									<hr>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button name="submit" class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

								
								</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row --><div class="form-group">
  <form action="processplaceorder.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data" style="text-align:center;"
		        	 >
  
    <label for="exampleInputEmail1">Code</label>
    <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
 
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Area</label>
    <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <label for="exampleInputEmail1">Products</label>
    <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <label for="exampleInputEmail1">Unit</label>
    <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <label for="exampleInputEmail1">Price</label>
    <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
	<!-- service section starts here -->
<!-- end of service section -->


	<!-- team section -->
	<!-- end of team section -->

	<!-- map section -->
	<div class="container-fluid">
<div class="row">
	<div class="col-md-12" >
	<iframe id='map1' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435521.40803140594!2d74.07126793973113!3d31.48263520766896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C+Punjab%2C+Pakistan!5e0!3m2!1sen!2s!4v1540796182741" width="1400" height="818" frameborder="0" style="border:0" allowfullscreen></iframe>
	<div>
</div>
<div>
	<div class="api-map"  id="contact">
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map" >

					
				</div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">

						<?php
                    $db = $obj->db_conn();
                           $query = "SELECT * FROM `contact_info` ";
                            
                        $result = $db->query($query);
                  
                       foreach ($result as $key)
                       
  // echo "<pre>";
  //                     print_r($row);
  //                     echo "</pre>";
                        { ?>

       
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> <?php echo $key['time1']; ?> AM to <?php echo $key['time2']; ?> PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> <?php echo $key['address']; ?></li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> <?php echo $key['phone']; ?></li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> <?php echo $key['email']; ?></li></ul>
							</div>
					</div>

      <?php } ?>

					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>leave us a message</h3>

						<form class="form" action="processcontactform.php">
							<input class="name" type="text" placeholder="Name">
							<input class="email" type="email" placeholder="Email">
							<input class="subject" type="text" placeholder="subject">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;Hahafah Pharma All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>