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
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
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


	<?php
// including the database connection file
include_once("Config.php");

if(isset($_POST['update']))
{	
    $id1 = $_POST['id'];
	
	$username= $_POST["username"];
    $email =$_POST["email"];
    $fullname =$_POST["fullname"];
    $category =$_POST["category"];
 
    $dob =$_POST["dob"];
    $area =$_POST["area"];



    $amount=$_POST["amount"];



    $city =$_POST["city"];
    $phone =$_POST["phone"];

    $dp =$_POST["dp"];
	$start =$_POST["start"];
	
	$price =$_POST["price"];
	$states =$_POST['states'];
    
	
	
	$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

   

    

    
       if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    
        $image=basename( $_FILES["imageUpload"]["name"],".jpg"); 


	
    // checking empty fields
      
        $sql1 = "UPDATE oder SET username='$username',fullname='$fullname, email ='$email' WHERE id=$id1";
       
		
		if(mysqli_query($conn, $sql)){
			echo "Update successfully.";
		 
			header("Location:osertable.php");
		  }
		  else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		
    }
}
?>
<?php

//getting id from url
 $id = $_GET['id'];
 $_SESSION["id"] = $id;

//selecting data associated with this particular id
$sql = "SELECT * FROM oder WHERE id=$id";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));

while($res = mysqli_fetch_array($result))
{
    
	$username= $res['username'];
	$email = $res['email'];
	$fullname = $res['fullname'];
	
    $category =$res["category"];
 
    $dob =$res["dob"];
    $area =$res["area"];



    $amount=$res["amount"];

    

    $city =$res["city"];
    $phone =$res["phone"];

    $dp =$res["dp"];
	$start =$res["start"];
	
	$price =$res["price"];

	
}
?>

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
				
			</div>
			
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
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
							<li><a href="index.html">Dashboard style 1</a></li>
							<li><a href="index2.html">Dashboard style 2</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">Form Basic</a></li>
							<li><a href="advanced-components.html">Advanced Components</a></li>
							<li><a href="form-wizard.html">Form Wizard</a></li>
							<li><a href="html5-editor.html">HTML5 Editor</a></li>
							<li><a href="form-pickers.html">Form Pickers</a></li>
							<li><a href="image-cropper.html">Image Cropper</a></li>
							<li><a href="image-dropzone.html">Image Dropzone</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Tables</span>
						</a>
						<ul class="submenu">
							<li><a href="basic-table.html">Basic Tables</a></li>
							<li><a href="datatable.html">DataTables</a></li>
						</ul>
					</li>
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
						</a>
						<ul class="submenu">
							<li><a href="ui-buttons.html">Buttons</a></li>
							<li><a href="ui-cards.html">Cards</a></li>
							<li><a href="ui-cards-hover.html">Cards Hover</a></li>
							<li><a href="ui-modals.html">Modals</a></li>
							<li><a href="ui-tabs.html">Tabs</a></li>
							<li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
							<li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
							<li><a href="ui-notification.html">Notification</a></li>
							<li><a href="ui-timeline.html">Timeline</a></li>
							<li><a href="ui-progressbar.html">Progressbar</a></li>
							<li><a href="ui-typography.html">Typography</a></li>
							<li><a href="ui-list-group.html">List group</a></li>
							<li><a href="ui-range-slider.html">Range slider</a></li>
							<li><a href="ui-carousel.html">Carousel</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
						</a>
						<ul class="submenu">
							<li><a href="font-awesome.html">FontAwesome Icons</a></li>
							<li><a href="foundation.html">Foundation Icons</a></li>
							<li><a href="ionicons.html">Ionicons Icons</a></li>
							<li><a href="themify.html">Themify Icons</a></li>
							<li><a href="custom-icon.html">Custom Icons</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Highchart</a></li>
							<li><a href="knob-chart.html">jQuery Knob</a></li>
							<li><a href="jvectormap.html">jvectormap</a></li>
							<li><a href="apexcharts.html">Apexcharts</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="video-player.html">Video Player</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="forgot-password.html">Forgot Password</a></li>
							<li><a href="reset-password.html">Reset Password</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="400.html">400</a></li>
							<li><a href="403.html">403</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="500.html">500</a></li>
							<li><a href="503.html">503</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="blank.html">Blank</a></li>
							<li><a href="contact-directory.html">Contact Directory</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="blog-detail.html">Blog Detail</a></li>
							<li><a href="product.html">Product</a></li>
							<li><a href="product-detail.html">Product Detail</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="profile.html">Profile</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="pricing-table.html">Pricing Tables</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
						</a>
						<ul class="submenu">
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
								</a>
								<ul class="submenu child">
									<li><a href="javascript:;">Level 2</a></li>
									<li><a href="javascript:;">Level 2</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
						</ul>
					</li>
					<li>
						<a href="sitemap.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
						</a>
					</li>
					<li>
						<a href="chat.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
					<li>
						<a href="invoice.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Introduction</a></li>
							<li><a href="getting-started.html">Getting Started</a></li>
							<li><a href="color-settings.html">Color Settings</a></li>
							<li><a href="third-party-plugins.html">Third Party Plugins</a></li>
						</ul>
					</li>
					<li>
						
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
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Edit Oder</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img src="image/logo.png" alt="" class="avatar-photo">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-body pd-5">
												<div class="img-container">
													<img id="image" src="image/logo.png" alt="Picture">
												</div>
											</div>
											<div class="modal-footer">
												<input type="submit" value="Update" class="btn btn-primary">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<form name="form1" method="post" action="oderupdate.php">	   		
							<label >User Name :</label>
							<input type="text" class="form-control" name="username" value="<?php echo $username;?>">
							<p class="text-center text-muted font-14">Username add</p>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Other Information</h5>
								<ul>
									<li>
									<label >full Name :</label>
									 <input type="text" class="form-control" name="fullname" value="<?php echo $fullname;?>">
									</li>
									<li>
									<label>Email Address :</label>
									<input type="email" class="form-control" name="email" value="<?php echo $email;?>">
									</li>
									<li>
									<label>Phone Number :</label>
									<input type="text" class="form-control" name="phone" value="<?php echo $phone;?>">
									</li>
									<li>
									<label>Select City :</label>
											<select class="custom-select form-control" name="city" >
												<option value="">Select City</option>
												<option value="Matara">Matara</option>
												<option value="Colombo">Colombo</option>
												<option value="Ampara">Ampara</option>
												<option value="Anuradhapura">Anuradhapura</option>
												<option value="Badulla">Badulla</option>
												<option value="Batticaloa">Batticaloa</option>
												<option value="Puttalam">Puttalam</option>
												<option value="Kurunegala">Kurunegala</option>
												<option value="Kandy">Kandy</option>
												<option value="Jaffna">Jaffna</option>
												<option value="Ratnapura">Ratnapura</option>
												<option value="Kalutara">Kalutara</option>
												<option value="Gampaha">Gampaha</option>
												<option value="Galle">Galle</option>
												<option value="Hambantota">Hambantota</option>
												<option value="Mullaitivu">Mullaitivu</option>
											
											</select>
										
									</li>

									<li>
									<label>Category:</label>
											<select class="custom-select form-control" name="category">
												<option value="">Category</option>
												<option value="carrot">Carrot</option>
												<option value="Drychilli">Dry chilli</option>
												<option value="Big onion">Big onion</option>
												<option value="Red onion">Red onion</option>
												<option value="Potato">Potato</option>
												<option value="Pumpkin">Pumpkin</option>
												<option value="Bitter-gourd">Bitter-gourd</option>
												<option value="Leek">Leek</option>
												<option value="Cauliflower">Cauliflower</option>
												<option value="Beet">Beet</option>
												<option value="Bean">Bean</option>
												<option value="Bell-pepper">Bell-pepper</option>
												<option value="Cucumber">Cucumber</option>
												</select>
									</li>
									<li>
									<label>Havest Amount :</label>
											<input type="text" class="form-control" name="amount" value="<?php echo $amount;?>">
									</li>

									<li>
									<label>Description (ssssfdf):</label>
									<textarea class="form-control" name="dp" value="<?php echo $dp;?>" ></textarea>
									</li>

									<li>
									<label>Add  Image :</label>
							
							<input type="file" class="form-control" name="imageUpload" id="imageUpload" >
									</li>

									<li>
									<label >Area:</label>
									 <input type="text" class="form-control" name="area" value="<?php echo $area;?>">
									</li>

									<li>
									<label >Price:</label>
									 <input type="text" class="form-control" name="price" value="<?php echo $price;?>">
									</li>
									
									<label>States:</label>
									<select class="custom-select form-control" name="states">
												<option value="">Not Ok</option>
												<option value="carrot">Chack Ok</option>
											
									
												</select>
									</li>

									<li>
									<label >Submit:</label>
									<input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
									 <input type="Submit" class="form-control" name="update" value="Update">
									</li>



								</ul>
							</div>
</form>
							<div class="profile-skills">
								
								
								
								
								
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							




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
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
	<script>
		window.addEventListener('DOMContentLoaded', function () {
			var image = document.getElementById('image');
			var cropBoxData;
			var canvasData;
			var cropper;

			$('#modal').on('shown.bs.modal', function () {
				cropper = new Cropper(image, {
					autoCropArea: 0.5,
					dragMode: 'move',
					aspectRatio: 3 / 3,
					restore: false,
					guides: false,
					center: false,
					highlight: false,
					cropBoxMovable: false,
					cropBoxResizable: false,
					toggleDragModeOnDblclick: false,
					ready: function () {
						cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
					}
				});
			}).on('hidden.bs.modal', function () {
				cropBoxData = cropper.getCropBoxData();
				canvasData = cropper.getCanvasData();
				cropper.destroy();
			});
		});
	</script>
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>