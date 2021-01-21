
<?php
include_once 'header.php';
include_once 'locations_model.php';
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Welcome </title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="image/lX3KDWaM.jpg">
	<link rel="icon" type="image/png" sizes="32x32" href="image/lX3KDWaM.jpg">
	<link rel="icon" type="image/png" sizes="16x16" href="image/lX3KDWaM.jpg">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../vendors/styles/style.css">

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
			<div class="loader-logo"><img src="../../image/logo.png" alt=""></div>
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
										<img src="../../vendors/images/img.jpg" alt="">
									
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
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>


	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="../../image/logo.png" alt="" class="dark-logo">
				<img src="../../image/logo.png?$description" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="../../dh.php" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							
						</ul>
					</li>
					<li class="dropdown">
					<ul id="accordion-menu">
				
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
					
			</div>
		</div>
	</div>
  <div class="mobile-menu-overlay"></div>
  




  <div id="map" ></div>
 



</body>
</html>

<!------ Include the above in your HEAD tag ---------->
<script>
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png' ;
    var locations = <?php get_all_locations() ?>;
   
    function initMap() {
        var france = {lat:  6.785277702704765, lng: 80.11392854687506};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: france,
            zoom: 8,
            
            mapId: '8271b18eb74b62e4'
        });


        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                animation: google.maps.Animation.DROP,
                icon :   locations[i][11] === '1' ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });


         

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][11] === '1' ?  'checked'  :  0;
                    $("#location_status").prop(confirmed,locations[i][10]);
                    $("#id").attr("href","edit.php?id="+locations[i][0]);
                    $("#description").val(locations[i][3]);
                    $("#email").val(locations[i][4]);
                    $("#phone").val(locations[i][5]);
                    $("#image").attr( "src","../../../uploads/"+locations[i][6]+".jpg");
                    $("#city").val(locations[i][7]);
                    $("#category").val(locations[i][8]);
                    $("#amount").val(locations[i][9]);
                    $("#area").val(locations[i][10]);
					$("#location_status").val(locations[i][11]);

                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

 


</script>


<div style="display: none" id="form"  >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">    

<div class="container" style="background-color: #61bc47;">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src=""  id="image">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">ODER<i class="material-icons right"></i></span>

        
        <h5>Username:</h5>
          <textarea disabled id='description' placeholder='Description'></textarea>
  
     
  
            <h5>Email:</h5>
         <textarea disabled id='email' placeholder='email'></textarea>
    

       
      
            <h5>city:</h5>
           <textarea disabled id='city' placeholder='city'></textarea>

           <h5>category:</h5>
           <textarea disabled id='category' placeholder='category'></textarea>

           <h5>Amount:</h5>
           <textarea disabled id='amount' placeholder='amount'></textarea>

           <h5>Area:</h5>
           <textarea disabled id='area' placeholder='area'></textarea>

           <h5>location_status:</h5>
		   <textarea disabled id='location_status' placeholder='location_status'></textarea>

		 
		   
		   <a href=""  class="myButton"   id='id' >Edit</a>

           <style>
             
			 .myButton {
	box-shadow: 0px 10px 14px -7px #3e7327;
	background-color:#77b55a;
	border-radius:4px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:12px 28px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton:hover {
	background-color:#72b352;
}
.myButton:active {
	position:relative;
	top:1px;
}



		   </style>



       
        
        </p>
      </div>
     
    </div>
  </div>

  <script src="../../vendors/scripts/core.js"></script>
	<script src="../../vendors/scripts/script.min.js"></script>
	<script src="../../vendors/scripts/process.js"></script>
	<script src="../../vendors/scripts/layout-settings.js"></script>
	<script src="../../src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="../../vendors/scripts/dashboard.js"></script>
	<script src="../../vendors/scripts/user.js"></script>
        
        

 
    
</div>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqyQucrB0MzSqxh-AS0iBAnqRec7MQwto&map_ids=8271b18eb74b62e4&callback=initMap">


</script>
<style>

textarea{

border: none;
background-color: #fff;
font-size: 30px;
color: #000;


}






</style>