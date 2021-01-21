<html>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">



<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard" method="POST" action="mapadd.php" enctype="multipart/form-data">
							<h5>Personal Info</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >User Name :</label>
											<input type="text" class="form-control" name="username">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >full Name :</label>
											<input type="text" class="form-control" name="fullname">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Email Address :</label>
											<input type="email" class="form-control" name="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone Number :</label>
											<input type="text" class="form-control" name="phone">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Select City :</label>
											<select class="custom-select form-control" name="city">
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
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Date of Birth :</label>
											<input type="text" class="form-control date-picker" placeholder="Select Date" name="dob">
										</div>
									</div>
								</div>
							</section>
							<!-- Step 2 -->
							<h5>Havest Infomation</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
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
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Havest Amount :</label>
											<input type="text" class="form-control" name="amount">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Description (ssssfdf):</label>
											<textarea class="form-control" name="dp" ></textarea>
										</div>
									</div>
								</div>
							</section>
							<!-- Step 3 -->
							<h5>Add images</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add  Image :</label>
							
											<input type="file" class="form-control" name="imageUpload" id="imageUpload" >
										</div>
										<div class="form-group">
											<label>Havest Area </label>
										
											<input type="text"class="form-control" placeholder="Area" name="area">
												
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Havest Start Date :</label>
											<input type="text" class="form-control date-picker" placeholder="Select Date" name="start">
										</div>
									</div>
								</div>
							</section>
							<!-- Step 4 -->
							
						
					</div>
				</div>

			

				<!-- success Popup html Start -->
				<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body text-center font-18">
								<h3 class="mb-20">Form Submitted!</h3>
								<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
								
							</div>
							<div class="modal-footer justify-content-center">
							<input type="submit" name="submit" value="Submit" >
							</div>
						</div>
					</div>
				</div>
				</form>
				<!-- success Popup html End -->
			</div>
			



            <script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>

</html>