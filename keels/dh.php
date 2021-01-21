
<!DOCTYPE html>
<html>
	
<link rel="apple-touch-icon" sizes="180x180" href="image/lX3KDWaM.jpg">
	<link rel="icon" type="image/png" sizes="32x32" href="image/lX3KDWaM.jpg">
	<link rel="icon" type="image/png" sizes="16x16" href="image/lX3KDWaM.jpg">


<?php

					include_once('Config.php'); 
					include ('chklog.php'); 

					
                   $sql = "select count(1) FROM user";
                   $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
                   $row = mysqli_fetch_array($result);
				   $total = $row[0];


				   

				   
				  $sql4 = "SELECT SUM(area) FROM oder ";
				  $result = mysqli_query($conn, $sql4) or die( mysqli_error($conn));
				  $row4 = mysqli_fetch_array($result);
				  $area= $row4[0];
				  
				


				   


;
?>


<?php

					include_once('Config.php'); 
					

					
                   $sql3 = "SELECT COUNT(1) FROM oder  WHERE category= 'carrot' ";
                   $result = mysqli_query($conn, $sql3) or die( mysqli_error($conn));
                   $row3 = mysqli_fetch_array($result);
				   $total3 = $row3[0];

				   echo  $total3;
				   
				   $sql5 = "SELECT COUNT(1) FROM oder  WHERE category= 'Drychilli' ";
                   $result5 = mysqli_query($conn, $sql5) or die( mysqli_error($conn));
                   $row5 = mysqli_fetch_array($result5);
				   $total5 = $row5[0];

				   $sql6 = "SELECT COUNT(1) FROM oder  WHERE category= 'Big onion' ";
                   $result6 = mysqli_query($conn, $sql6) or die( mysqli_error($conn));
                   $row6 = mysqli_fetch_array($result6);
				   $total6 = $row6[0];

				   $sql7 = "SELECT COUNT(1) FROM oder  WHERE category= 'Red onion' ";
                   $result7 = mysqli_query($conn, $sql7) or die( mysqli_error($conn));
                   $row7 = mysqli_fetch_array($result7);
				   $total7 = $row7[0];


				   $sql8 = "SELECT COUNT(1) FROM oder  WHERE category= 'Potato' ";
                   $result8 = mysqli_query($conn, $sql8) or die( mysqli_error($conn));
                   $row8 = mysqli_fetch_array($result8);
				   $total8 = $row8[0];

				   $sql9 = "SELECT COUNT(1) FROM oder  WHERE category= 'Pumpkin' ";
                   $result9 = mysqli_query($conn, $sql9) or die( mysqli_error($conn));
                   $row9 = mysqli_fetch_array($result9);
				   $total9 = $row9[0];

				   $sql10 = "SELECT COUNT(1) FROM oder  WHERE category= 'Bitter-gourd' ";
                   $result10 = mysqli_query($conn, $sql10) or die( mysqli_error($conn));
                   $row10 = mysqli_fetch_array($result10);
				   $total10 = $row10[0];

				   $sql11 = "SELECT COUNT(1) FROM oder  WHERE category= 'Leek' ";
                   $result11 = mysqli_query($conn, $sql11) or die( mysqli_error($conn));
                   $row11 = mysqli_fetch_array($result11);
				   $total11 = $row11[0];

				   $sql12 = "SELECT COUNT(1) FROM oder  WHERE category= 'Cauliflower' ";
                   $result12 = mysqli_query($conn, $sql12) or die( mysqli_error($conn));
                   $row12 = mysqli_fetch_array($result12);
				   $total12 = $row12[0];

				   $sql13 = "SELECT COUNT(1) FROM oder  WHERE category= 'Beet' ";
                   $result13 = mysqli_query($conn, $sql13) or die( mysqli_error($conn));
                   $row13 = mysqli_fetch_array($result13);
				   $total13 = $row13[0];

				   $sql14 = "SELECT COUNT(1) FROM oder  WHERE category= 'Bean' ";
                   $result14 = mysqli_query($conn, $sql14) or die( mysqli_error($conn));
                   $row14 = mysqli_fetch_array($result14);
				   $total14 = $row14[0];


				   $sql15 = "SELECT COUNT(1) FROM oder  WHERE category= 'Bell-pepper' ";
                   $result15 = mysqli_query($conn, $sql15) or die( mysqli_error($conn));
                   $row15 = mysqli_fetch_array($result15);
				   $total15 = $row15[0];

				   


				   $sql17 = "SELECT COUNT(1) FROM oder  WHERE city= 'Matara' ";
				   $result17 = mysqli_query($conn, $sql17) or die( mysqli_error($conn));
				   $row17 = mysqli_fetch_array($result17);
				   $total17 = $row17[0];
				   
				   $sql18 = "SELECT COUNT(1) FROM oder  WHERE city= 'Colombo'  ";
				   $result18 = mysqli_query($conn, $sql18) or die( mysqli_error($conn));
				   $row18 = mysqli_fetch_array($result18);
				   $total18 = $row18[0];
				   
				   $sql19 = "SELECT COUNT(1) FROM oder  WHERE city= 'Ampara'  ";
				   $result19 = mysqli_query($conn, $sql19) or die( mysqli_error($conn));
				   $row19 = mysqli_fetch_array($result19);
				   $total19 = $row19[0];
				   
				   $sql20 = "SELECT COUNT(1) FROM oder  WHERE city= 'Anuradhapura' ";
				   $result20 = mysqli_query($conn, $sql20) or die( mysqli_error($conn));
				   $row20 = mysqli_fetch_array($result20);
				   $total20 = $row20[0];
				   
				   $sql21 = "SELECT COUNT(1) FROM oder  WHERE city= 'Badulla'  ";
				   $result21 = mysqli_query($conn, $sql21) or die( mysqli_error($conn));
				   $row21 = mysqli_fetch_array($result21);
				   $total21 = $row21[0];
				   
				   $sql22 = "SELECT COUNT(1) FROM oder  WHERE city= 'Batticaloa'  ";
				   $result22 = mysqli_query($conn, $sql22) or die( mysqli_error($conn));
				   $row22 = mysqli_fetch_array($result22);
				   $total22 = $row22[0];
				   
				   $sql23 = "SELECT COUNT(1) FROM oder  WHERE city= 'Puttalam'  ";
				   $result23 = mysqli_query($conn, $sql23) or die( mysqli_error($conn));
				   $row23 = mysqli_fetch_array($result23);
				   $total23 = $row23[0];
				   
				   $sql24 = "SELECT COUNT(1) FROM oder  WHERE city= 'Kurunegala'  ";
				   $result24 = mysqli_query($conn, $sql24) or die( mysqli_error($conn));
				   $row24 = mysqli_fetch_array($result24);
				   $total24 = $row24[0];
				   
				   $sql25 = "SELECT COUNT(1) FROM oder  WHERE city= 'Kandy'  ";
				   $result25 = mysqli_query($conn, $sql25) or die( mysqli_error($conn));
				   $row25 = mysqli_fetch_array($result25);
				   $total25 = $row25[0];
				   
				   $sql26 = "SELECT COUNT(1) FROM oder  WHERE city= 'Jaffna'  ";
				   $result26 = mysqli_query($conn, $sql26) or die( mysqli_error($conn));
				   $row26 = mysqli_fetch_array($result26);
				   $total26 = $row26[0];
				   
				   $sql27 = "SELECT COUNT(1) FROM oder  WHERE city= 'Ratnapura'  ";
				   $result27 = mysqli_query($conn, $sql27) or die( mysqli_error($conn));
				   $row27 = mysqli_fetch_array($result27);
				   $total27 = $row27[0];
				   
				   $sql28 = "SELECT COUNT(1) FROM oder  WHERE city= 'Kalutara'  ";
				   $result28 = mysqli_query($conn, $sql28) or die( mysqli_error($conn));
				   $row28 = mysqli_fetch_array($result28);
				   $total28 = $row28[0];
				   
				   
				   $sql29 = "SELECT COUNT(1) FROM oder  WHERE city= 'Kalutara'  ";
				   $result29 = mysqli_query($conn, $sql29) or die( mysqli_error($conn));
				   $row29 = mysqli_fetch_array($result29);
				   $total29 = $row29[0];
				   
				   
				   $sql30= "SELECT COUNT(1) FROM oder  WHERE city= 'Kalutara'  ";
				   $result30 = mysqli_query($conn, $sql30) or die( mysqli_error($conn));
				   $row30 = mysqli_fetch_array($result30);
				   $total30 = $row30[0];
				   
				   
				   $sql31 = "SELECT COUNT(1) FROM oder  WHERE city= 'Gampaha'  ";
				   $result31 = mysqli_query($conn, $sql31) or die( mysqli_error($conn));
				   $row31 = mysqli_fetch_array($result31);
				   $total31 = $row31[0];
				   
				   
				   $sql32 = "SELECT COUNT(1) FROM oder  WHERE city= 'Galle'  ";
				   $result32 = mysqli_query($conn, $sql32) or die( mysqli_error($conn));
				   $row32 = mysqli_fetch_array($result32);
				   $total32 = $row32[0];
				   
				   
				   $sql33 = "SELECT COUNT(1) FROM oder  WHERE city= 'Hambantota'  ";
				   $result33 = mysqli_query($conn, $sql33) or die( mysqli_error($conn));
				   $row33 = mysqli_fetch_array($result33);
				   $total33 = $row33[0];
				   
				   $sql34 = "SELECT COUNT(1) FROM oder  WHERE city= 'Hambantota'  ";
				   $result34 = mysqli_query($conn, $sql34) or die( mysqli_error($conn));
				   $row34 = mysqli_fetch_array($result34);
				   $total34 = $row34[0];


				   $sql35 = "SELECT COUNT(1) FROM oder  WHERE location_status= '1'  ";
				   $result35 = mysqli_query($conn, $sql35) or die( mysqli_error($conn));
				   $row35 = mysqli_fetch_array($result35);
				   $total35 = $row35[0];




				   


;
?>


<script>


               var username = localStorage.getItem('inputVal');




</script>


<?php




include_once('chklog.php'); 
$sql1 = "select count(1) FROM oder";
$result1= mysqli_query($conn, $sql1) or die( mysqli_error($conn));
$row1 = mysqli_fetch_array($result1);
$total1 = $row1[0];







?>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Welcome  </title>

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
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
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
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
									
									</a>
								</li>
				
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						
						
					</a>
					
				</div>
			</div>
			
		</div>
	</div>


		

			
			

			
			</div>
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



				  <?php 
				  
				echo  "<a href='chat.php' class='dropdown-toggle no-arrow'>";
				echo  " <span class='micon dw dw-chat'></span><span class='mtext'>Chat </span>";
				  
			 echo  "</a>";

				 
				 
				 
				 ?>

						
					</li>

					
						

							 
						</ul>
					</li>
					
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="image/sfdfd-1.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize"  >
							Welcome back!

							
								</h4>
								  

							   
                   
						
							

							
							
							<div class="weight-600 font-30 text-blue"> <h2> <?php
							
							echo "
							
							<script>document.writeln(username);</script>";
					
							
							
							?>  </h2></div>
						
						<p class="font-18 max-width-600">quick and easy  experience ADMIN </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>

								


							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><h1><?php echo $total;; ?></h1></div>
								<div class="weight-600 font-14">Total Farmas</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">

							 
								<div class="h4 mb-0"><h1><?php echo $total1;; ?></h1></div>
								<div class="weight-600 font-14">Total Oder</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><h1><?php echo $area;; ?></h1></div>
								<div class="weight-600 font-14"> Total Harvest Area(Fet)</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><h1><?php echo 	$total35;; ?></h1></div>
								<div class="weight-600 font-14">Confirm Oder</div>
							 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Foods</h2>
						<div id="chart5"></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">TOP Cities</h2>
						<div id="chart6"></div>


					</div>
				</div>
			</div>
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">My Products</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">User Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Image</th>
							<th>Category</th>
							<th>City</th>
							<th>desription</th>
							<th>Amount</th>
							<th>ID</th>
						
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table-plus">

							
							<?php
									   include_once("Config.php");
									   include_once("chklog.php");
								
 
									   //fetching data in descending order (lastest entry first)
									   //$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
									   
									   
										        //to check if the form was submitted
											
												 //page 2

												

												 


									  
									   

									$sql = "SELECT * FROM  oder ORDER BY id DESC";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
									 echo "<tr>";
									 echo "<td >".$res['username']."</td>";
									 echo "<td  >".$res['email']."</td>"; 
									 echo "<td  >".$res['phone']."</td>"; 
						
									 echo "<td><img src='uploads/$res[image].jpg' height='150px' width='300px'></td>";
									 echo "<td  >".$res['category']."</td>"; 
								

									 echo "<td  >".$res['city']."</td>"; 
									 echo "<td  >".$res['desription']."</td>"; 
									 echo "<td  >".$res['amount']."</td>"; 

						
									 echo "<td  >".$res['id']."</td>"; 
									 echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
									
									 

									   }
									   
									  
				  
                                     
     ?>

							
							

								
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
					
						</tr>
					</tbody>
				</table>
			</div>
			
			
		</div>
	</div>
	<!-- js -->
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

	<script>




	 
									
									
				
	  

   </script>

  

<script>

var a = <?php  echo $total?>;

var  x   = 5 * parseInt(a);

var b = <?php  echo $total1?>;

var  oder = 5 * parseInt(b);

var area =<?php  echo $area?>;
 var sumarea  = 10 * parseInt(area )/1000;


var table = <?php  echo $total3?>;
var table1 = <?php  echo $total5?>;
var table2 = <?php  echo $total6?>;
var table3 = <?php  echo $total7?>;
var table4 = <?php  echo $total8?>;
var table5= <?php  echo $total9?>;
var table6= <?php  echo $total10?>;
var table7= <?php  echo $total11?>;
var table8= <?php  echo $total12?>;
var table9= <?php  echo $total13?>;
var table10= <?php  echo $total14?>;
var table11 = <?php  echo $total15?>;


var  carrot = 1 * parseInt(table);
var  carrot1 = 1 * parseInt(table1);
var  carrot2 = 1 * parseInt(table2);
var  carrot3 = 1 * parseInt(table3);
var  carrot4 = 1 * parseInt(table4);
var  carrot5 = 1 * parseInt(table5);
var  carrot6 = 1 * parseInt(table6);
var  carrot7 = 1 * parseInt(table7);
var  carrot8 = 1 * parseInt(table8);
var  carrot9 = 1 * parseInt(table9);
var  carrot10 = 1 * parseInt(table10);
var  carrot11 = 1 * parseInt(table11);


var t = <?php  echo $total17?>;
var t1 = <?php  echo $total18?>;
var t2 = <?php  echo $total19?>;
var t3 = <?php  echo $total20?>;
var t4 = <?php  echo $total21?>;
var t5 = <?php  echo $total22?>;
var t6 = <?php  echo $total23?>;
var t7 = <?php  echo $total24?>;
var t8 = <?php  echo $total25?>;
var t9 = <?php  echo $total26?>;
var t10 = <?php  echo $total27?>;
var t11= <?php  echo $total28?>;
var t12= <?php  echo $total29?>;
var t13= <?php  echo $total30?>;
var t14= <?php  echo $total31?>;
var t15= <?php  echo $total32?>;
var t16= <?php  echo $total33?>;
var t17= <?php  echo $total34?>;


var  c = 1 * parseInt(t);


var  c1 = 1 * parseInt(t1);


var  c2 = 1 * parseInt(t2);


var  c3 = 1 * parseInt(t3);
var  c4 = 1 * parseInt(t4);
var  c5 = 1 * parseInt(t5);
var  c6 = 1 * parseInt(t6);
var  c7 = 1 * parseInt(t7);
var  c8 = 1 * parseInt(t8);
var  c9= 1 * parseInt(t9);
var  c10 = 1 * parseInt(t10);
var  c11 = 1 * parseInt(t11);
var  c12 = 1 * parseInt(t12);
var  c13 = 1 * parseInt(t13);
var  c14 = 1 * parseInt(t14);
var  c15 = 1 * parseInt(t15);
var  c16 = 1 * parseInt(t16);
var  c17 = 1 * parseInt(t17);

var t18= <?php  echo $total35?>;
var  c18 = 1 * parseInt(t18);





var options = {
	series: [x],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#61bc47'],
			inverseColors: false,
			opacityFrom: [1, 0.2],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options2 = {
	series: [oder],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 1,
			gradientToColors: ['#61bc47'],
			inverseColors: false,
			opacityFrom: [1, 0.2],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options3 = {
	series: [sumarea],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#61bc47'],
			inverseColors: false,
			opacityFrom: [1, 0.2],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options4 = {
	series: [c18],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#61bc47'],
			inverseColors: false,
			opacityFrom: [1, 0.5],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options5 = {
	chart: {
		height: 350,
		type: 'bar',
		parentHeightOffset: 0,
		fontFamily: 'Poppins, sans-serif',
		toolbar: {
			show: false,
		},
	},
	colors: ['#61bc47', '#f56767'],
	grid: {
		borderColor: '#61bc47',
		strokeDashArray: 5,
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '25%',
			endingShape: 'rounded'
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		show: true,
		width: 2,
		colors: ['transparent']
	},
	series: [{
		name: 'Food',
		data: [carrot,carrot1,carrot2,carrot3,carrot4,carrot5,carrot6,carrot7,carrot8,carrot9,carrot10,carrot11]
	}, {
	
	}],
	xaxis: {
		categories: ['Carrot', 'Drychilli', 'Big onion', 'Potato', 'Pumpkin', 'leek','Red onion','Cauliflower','Beet','Bean','Bell-pepper','Cucumber'],
		labels: {
			style: {
				colors: ['#353535'],
				fontSize: '16px',
			},
		},
		axisBorder: {
			color: '#8fa6bc',
		}
	},
	yaxis: {
		title: {
			text: ''
		},
		labels: {
			style: {
				colors: '#353535',
				fontSize: '16px',
			},
		},
		axisBorder: {
			color: '#f00',
		}
	},
	legend: {
		horizontalAlign: 'right',
		position: 'top',
		fontSize: '16px',
		offsetY: 0,
		labels: {
			colors: '#353535',
		},
		markers: {
			width: 10,
			height: 10,
			radius: 15,
		},
		itemMargin: {
			vertical: 0
		},
	},
	fill: {
		opacity: 1

	},
	tooltip: {
		style: {
			fontSize: '15px',
			fontFamily: 'Poppins, sans-serif',
		},
		y: {
			formatter: function (val) {
				return val
			}
		}
	}
}

var options6 = {
	series: [c, c1, c2, c3, c4,c5,c6,c7,c8,c9,c10,c11,c12,c13,c14,c14,c15,c16,c17],
	labels: ['Matara', 'Colombo', 'Ampara', 'Anuradhapura','Badulla','Batticaloa','Puttalam','Kurunegala','Kandy','Jaffna','Ratnapura','Kalutara','Gampaha','Galle','Hambantota','Mullaitivu'],

	chart: {
	  height: 550,
	  type: 'donut',
	  offsetY: 70
	},
	colors: ['#ff0000', '#ff9966','#ff66ff','#00FFFF','#ADD8E6','#800080','#FFFF00','#00FF00','#438D80','#FFFFCC','#E8A317','#786D5F','#7F5217','#F88017','#E55B3C','#F62817'],
	plotOptions: {
		pie: {
	customScale: 1.0,

		dataLabels: {
		  name: {
			fontSize: '18px',
			color: undefined,
		
		  },
		  value: {
			offsetY: 76,
			fontSize: '24px',
			color: undefined,
			formatter: function (val) {
			  return val + "%";
			}
		  }
		}
	  }
	},
	

};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();

var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
chart5.render();

var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
chart6.render();


// datatable init
$('document').ready(function(){
	$('.data-table').DataTable({
		scrollCollapse: true,
		autoWidth: true,
		responsive: true,
		searching: false,
		bLengthChange: false,
		bPaginate: false,
		bInfo: false,
		columnDefs: [{
			targets: "datatable-nosort",
			orderable: false,
		}],
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		"language": {
			"info": "_START_-_END_ of _TOTAL_ entries",
			searchPlaceholder: "Search",
			paginate: {
				next: '<i class="ion-chevron-right"></i>',
				previous: '<i class="ion-chevron-left"></i>'  
			}
		},
	});
});

	</script>


	 
	



</body>




</html>

