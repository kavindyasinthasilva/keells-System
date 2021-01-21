<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="image/lX3KDWaM.jpg">
	<link rel="icon" type="image/png" sizes="32x32" href="image/lX3KDWaM.jpg">
	<link rel="icon" type="image/png" sizes="16x16" href="image/lX3KDWaM.jpg">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
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
						<div class="notification-list mx-h-350 customscroll">
						
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			>
		</div>
	</div>



	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="image/logo.png" alt="" class="dark-logo">
				<img src="image/logo.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="form-wizard.php" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Add New</span>
						</a>
					
					</li>
					<li class="dropdown">
						<a href="osertable.php" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Full Oder Details </span>
						</a>
				
						 </ul>
					</li>
					<li class="dropdown">
						<a href="map/admin-map.php" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Confimation to Oder </span>
						</a>
				
						 </ul>
					</li>



					<li class="dropdown">
						<a href="chart.php" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
						
						</ul>
					</li>

					<li>
				
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
								<h4>Oder Tables</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Oder Tables</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<?php echo "Today is " . date("Y/m/d") . "<br>"; ?>
								</a>
								
							</div>
						</div>
					</div>
				</div>
				<!-- basic table  Start -->
				
						
			
				<!-- Bordered table End -->
			
			
				<!-- Responsive tables End -->
				<!-- Contextual classes Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
						
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
								    <th scope="col">ID</th>
									<th scope="col">Username</th>
									<th scope="col">Email</th>
									<th scope="col">Phone</th>
									<th scope="col">Images</th>
									<th scope="col">Category</th>
									<th scope="col">City</th>
									<th scope="col">Desription</th>
									<th scope="col">Amount</th>
									<th scope="col">Price</th>
									<th scope="col">States</th>
									<th scope="col">Area</th>
									
									
								</tr>
							</thead>
							<tbody>
							<?php
									   include_once("Config.php");
									
								
 
									   //fetching data in descending order (lastest entry first)
									   //$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
									   
									   
										        //to check if the form was submitted
											
												 //page 2

												

												 


									  
									   

									$sql = "SELECT * FROM  oder ORDER BY id DESC";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
									 echo "<tr>";

									 echo "<td class=table-warning >".$res['id']."</td>"; 
									 echo "<td class=table-active>".$res['username']."</td>";
									 echo "<td class=table-primary>".$res['email']."</td>"; 
									 echo "<td  >".$res['phone']."</td>"; 
						
									 echo "<td><img src='uploads/$res[image].jpg' height='150px' width='300px'></td>";
									 
									 echo "<td  >".$res['category']."</td>"; 
								

									 echo "<td  class=table-secondary>".$res['city']."</td>"; 
									 echo "<td  >".$res['desription']."</td>"; 
									 echo "<td  class=table-success>".$res['amount']."</td>"; 
									 echo "<td  class=table-danger>".$res['price']."</td>";
									 
									 echo "<td  >".$res['states'] ."</td>"; 

									 echo "<td  >".$res['area']."</td>"; 

									  echo "<td><a href=\"editoder.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
						
									
									
									
									 

									   }
									   
									  
				  
                                     
     ?>

							</tbody>
						</table>
					</div>
					<div class="collapse collapse-box" id="contextual-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#contextual-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#contextual-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="contextual-table-code">
<div class="table-responsive">
	<table class="table table-striped">
	  <tbody>
	    <tr class="table-active"><td></td></tr>
		<tr class="table-primary"><td></td></tr>
		<tr class="table-secondary"><td></td></tr>
		<tr class="table-success"><td></td></tr>
		<tr class="table-danger"><td></td></tr>
		<tr class="table-warning"><td></td></tr>
		<tr class="table-info"><td></td></tr>
		<tr class="table-light"><td></td></tr>
		<tr class="table-dark"><td></td></tr>
	  </tbody>
	</table>
</div>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Contextual classes End -->
			</div>
			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>