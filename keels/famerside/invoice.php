<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Invoice</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="image/lX3KDWaM.jpg">
	<link rel="icon" type="image/png" sizes="32x32" href="image/lX3KDWaM.jpg">
	<link rel="icon" type="image/png" sizes="16x16" href="image/lX3KDWaM.jpg">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<?php 


$username =$_GET['username'];

?>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="image/logo.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					
					
				</div>
			</div>
		
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			
			
		</div>
		
				
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
            <img src="image/logo.png" alt="" class="dark-logo">
				<img src="image/logo.png?$description" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">

                    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Add New</span>
						</a>
						<ul class="submenu">
							<li><a href="useradditems.php">Add New Product</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-map-marker"></span><span class="mtext">MY MAP</span>
						</a>
						<ul class="submenu">
							<li><a href="map/admin-map.php">All Details</a></li>
							<li><a href="<?php echo "map/my/admin-map.php?username=$description";  ?>">MY Map Details</a></li>
							 
						</ul>
					</li>



					<li class="dropdown">
						<a href="<?php echo "invoice.php?username=$description";  ?>" class="dropdown-toggle">
							<span class="micon dw dw-invoice"></span><span class="mtext">MY Invoice</span>
							
						</a>
						
					</li>

					<li>
						<a href="map/user-map.php" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-users"></span><span class="mtext">Profile</span>
							
						</a>

					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Gallery</span>
						</a>
						<ul class="submenu">
							<li><a href="gallery.php">Gallery</a></li>
						

							 
						</ul>
					</li>

                   
				
						
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Invoice</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <?php
                        echo "Today is " . date("Y/m/d") ;
?>
								</a>
						
							</div>
						</div>
					</div>
				</div>
				<div class="invoice-wrap">
					<div class="invoice-box">
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="vendors/images/deskapp-logo.png" alt="">
							</div>
						</div>
						<h4 class="text-center mb-30 weight-600">INVOICE</h4>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15"><?php echo $username; ?></h5>
								<p class="font-14 mb-5"  style="color: #FF0000;" >Date Issued: <strong class="weight-600"  style="color: #FF0000;"><?php echo date("Y/m/d") ;?></strong></p>
								
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<p class="font-14 mb-5" style="color: #000;">Keells Food Products PLC</strong></p>
									<p class="font-14 mb-5" style="color: #000;">No. 16, Minuwangoda Road</p>
									<p class="font-14 mb-5" style="color: #000;">Ekala, Ja-ela,</p>
									<p class="font-14 mb-5" style="color: #000;">Sri Lankas</p>
								</div>
							</div>
                        </div>
                        

						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
								<div class="invoice-sub"  style="color: #000;">Items</div>
								<div class="invoice-rate"  style="color: #000;" >Location</div>
								<div class="invoice-hours" style="color: #000;">ID</div>
								<div class="invoice-subtotal" style="color: #000;">Subtotal</div>
                            </div>
                            
                            <?php
									   include_once("Config.php");
									 
								
 
			
									$sql = "SELECT * FROM  oder WHERE username= '$username'  AND  location_status= '1' ";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
							
									
						          echo "<div class='invoice-desc-body'>";
								   echo "<ul>";
									echo "<li class='clearfix'>";
									echo	"<div class='invoice-sub'>".$res['category']."</div>";
									echo	"<div class='invoice-rate'>".$res['city']."</div>";
									echo	"<div class='invoice-hours'>" .$res['id']."</div>";
									echo	"<div class='invoice-subtotal'><span class='weight-600'>".$res['price']."</span></div>";
									echo"</li>";
								echo "</ul>";
							echo"</div>";
									 

                                    }	   
									   
									  
				  
                                     
     ?>

							
							<div class="invoice-desc-footer">
								<div class="invoice-desc-head clearfix">
									
									
									<div class="invoice-subtotal">Total Due</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">
											
											</div>
										
											<div class="invoice-subtotal"><span class="weight-600 font-24 text-danger">$8000</span></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
	<script src="vendors/scripts/user.js"></script>
</body>
</html>