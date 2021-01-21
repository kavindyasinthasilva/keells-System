<!DOCTYPE html>
<html>


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
				  
				


				   



?>
<?php

include_once('Config.php'); 



$sql3 = "SELECT COUNT(1) FROM oder  WHERE category= 'carrot' ";
$result = mysqli_query($conn, $sql3) or die( mysqli_error($conn));
$row3 = mysqli_fetch_array($result);
$total3 = $row3[0];



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

$sql12 = "SELECT COUNT(1) FROM oder  WHERE category = 'Cauliflower' ";
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






$sql35 = "SELECT Sum(amount) FROM oder WHERE category= 'carrot' ";
$result35 = mysqli_query($conn, $sql35) or die( mysqli_error($conn));
$row35 = mysqli_fetch_array($result35);
$total35 = $row35[0];


$sql36 = "SELECT sum(amount) FROM oder  WHERE category= 'Drychilli' ";
$result36 = mysqli_query($conn, $sql36) or die( mysqli_error($conn));
$row36 = mysqli_fetch_array($result36);
$total36 = $row36[0];

$sql37 = "SELECT sum(amount) FROM oder  WHERE category= 'Big onion' ";
$result37 = mysqli_query($conn, $sql37) or die( mysqli_error($conn));
$row37 = mysqli_fetch_array($result37);
$total37 = $row37[0];

$sql38 = "SELECT sum(amount) FROM oder  WHERE category= 'Potato' ";
$result38 = mysqli_query($conn, $sql38) or die( mysqli_error($conn));
$row38 = mysqli_fetch_array($result38);
$total38 = $row38[0];

$sql39 = "SELECT sum(amount) FROM oder  WHERE category= 'Pumpkin' ";
$result39 = mysqli_query($conn, $sql39) or die( mysqli_error($conn));
$row39 = mysqli_fetch_array($result39);
$total39 = $row39[0];


$sql40 = "SELECT sum(amount) FROM oder  WHERE category= 'Leek' ";
$result40 = mysqli_query($conn, $sql40) or die( mysqli_error($conn));
$row40 = mysqli_fetch_array($result40);
$total40 = $row40[0];

$sql41 = "SELECT sum(amount) FROM oder  WHERE category= 'Red onion' ";
$result41= mysqli_query($conn, $sql41) or die( mysqli_error($conn));
$row41 = mysqli_fetch_array($result41);
$total41 = $row41[0];

	   
$sql50 = "SELECT sum(amount) FROM oder  WHERE category= 'Cauliflower' ";
$result50 = mysqli_query($conn, $sql50) or die( mysqli_error($conn));
$row50 = mysqli_fetch_array($result50);
$total50 = $row50[0];



$sql51 = "SELECT sum(amount) FROM oder  WHERE category= 'Beet' ";
$result51 = mysqli_query($conn, $sql51) or die( mysqli_error($conn));
$row51 = mysqli_fetch_array($result51);
$total51 = $row51[0];

$sql52 = "SELECT sum(amount) FROM oder  WHERE category= 'Bean' ";
$result52 = mysqli_query($conn, $sql52) or die( mysqli_error($conn));
$row52 = mysqli_fetch_array($result52);
$total52 = $row52[0];

$sql53 = "SELECT sum(amount) FROM oder  WHERE category= 'Bell-pepper' ";
$result53 = mysqli_query($conn, $sql53) or die( mysqli_error($conn));
$row53 = mysqli_fetch_array($result53);
$total53 = $row53[0];



$sql55 = "SELECT COUNT(1) FROM oder  WHERE category= 'Red onion' ";
$result55 = mysqli_query($conn, $sql55) or die( mysqli_error($conn));
$row55 = mysqli_fetch_array($result55);
$total55 = $row55[0];




$sql56 = "SELECT COUNT(1) FROM oder  WHERE location_status= '0' ";
$result56 = mysqli_query($conn, $sql56) or die( mysqli_error($conn));
$row56 = mysqli_fetch_array($result56);
$total56 = $row56[0];

$sql58 = "SELECT COUNT(1) FROM oder  WHERE location_status= '1' ";
$result58 = mysqli_query($conn, $sql58) or die( mysqli_error($conn));
$row58 = mysqli_fetch_array($result58);
$total58 = $row58[0];


$sql60 = "SELECT COUNT(1) FROM oder  WHERE category= 'carrot' AND  location_status= '1' ";
$result60 = mysqli_query($conn, $sql60) or die( mysqli_error($conn));
$row60 = mysqli_fetch_array($result60);
$total60 = $row60[0];

$sql61 = "SELECT COUNT(1) FROM oder  WHERE category= 'Drychilli' AND  location_status= '1' ";
$result61 = mysqli_query($conn, $sql61) or die( mysqli_error($conn));
$row61 = mysqli_fetch_array($result61);
$total61 = $row61[0];




;
?>

<?php




include_once('chklog.php'); 
$sql1 = "select count(1) FROM oder";
$result1= mysqli_query($conn, $sql1) or die( mysqli_error($conn));
$row1 = mysqli_fetch_array($result1);
$total1 = $row1[0];







?>


<script>




     




</script>




<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Charts</title>

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
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					
                <canvas id="bar-chart" width="800" height="250" ></canvas>

                <canvas id="bar-chart1" width="800" height="250" style="margin: 10px; "></canvas>

                <canvas id="pie-chart" width="800" height="250"></canvas>

                <canvas id="bar-chart-grouped" width="800" height="250"></canvas>


							
							
						


					</div>
				</div>
			</div>
		
							
					
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

	<script>
var a = <?php  echo $total?>;

var  x= 5 * parseInt(a);

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

var table12 = <?php  echo $total55?>;




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


var s= <?php  echo $total35?>;
var  e = 1 * parseInt(s);
var s1= <?php  echo $total36?>;
var  e1 = 1 * parseInt(s1);

var s2= <?php  echo $total37?>;
var  e2 = 1 * parseInt(s2);

var s11= <?php  echo $total56?>;
var  e11 = 1 * parseInt(s11);

var s12= <?php  echo $total58?>;
var  e12 = 1 * parseInt(s12);



var s4= <?php  echo $total39?>;
var s6= <?php  echo $total41?>;
var s7= <?php  echo $total50?>;
var s8= <?php  echo $total51?>;
var s9= <?php  echo $total52?>;
var s10= <?php  echo $total53?>;

var  e4 = 1 * parseInt(s4);
var  e6 = 1 * parseInt(s6);
var  e7 = 1 * parseInt(s7);
var  e8 = 1 * parseInt(s8);
var  e9 = 1 * parseInt(s9);
var  e10 = 1 * parseInt(s10);






	 
									
									
				
	  



  



new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ['Carrot', 'Drychilli', 'Big onion', 'Potato', 'Pumpkin','leek','Red onion','Cauliflower','Beet','Bean','Bell-pepper'],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#9F000F","#7F4E52","#FAAFBE","#FAAFBA","#FF00FF","#461B7E","#FFA500"],
          data: [carrot,carrot1,carrot2,carrot3,carrot4,carrot5,carrot6,carrot9,carrot10,carrot11,1]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'vegetables'
      }
    }
});

new Chart(document.getElementById("bar-chart1"), {
    type: 'bar',
    data: {
      labels: ['Carrot', 'Drychilli', 'Big onion', 'Potato', 'Pumpkin', 'leek','Red onion','Cauliflower','Beet','Bean','Bell-pepper'],
      datasets: [
        {
          label: "Amount (KG)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#9F000F","#7F4E52","#FAAFBE","#FAAFBA","#FF00FF","#461B7E","#FFA500"],
          data: [e ,e1,e2,10,e4,20,e6,e7,e8,e9,e10]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'vegetables Amount'
      }
    }
});
 
new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Pending", "confirmed"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2"],
        data: [ e11 , e12]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Pending and non pending '
      }
    }
});






	</script>





	 
	



</body>




</html>