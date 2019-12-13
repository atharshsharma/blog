<?php include_once '../inc/head.php';?>
<body>
	<?php $HeaderClass = 'bg-header';?>
	<?php include_once '../inc/nav.php';?>
	<main class="contact-page">
		<div class="container">
			<div class="my-4">
				<a href="home.php" target="blank" class="text-info font-weight-bold">Home</a>
				<span class="align-middle">
					<i class="zmdi zmdi-chevron-right"></i>
					<i class="zmdi zmdi-chevron-right right-arrow"></i>
				</span>
				<span>Customer Support</span>
			</div>
			<div class="text-center my-3">
				<h2 class="contact-title text-uppercase font-weight-bold">Contact Us</h2>
				<h4 class="contact-subtitle text-uppercase font-weight-medium">Contact Us - We'Re Here To Help!</h4>
			</div>
			<form class="form-head mx-auto">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="text-uppercase">First Name</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="text-uppercase">Last Name</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="text-uppercase">Email Address</label>
							<input type="Email" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="text-uppercase">Phone Number</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
    						<label class="text-uppercase">How Can We Help You?</label>
    						<select class="form-control">
						    	<option>Select One</option>
						    	<option>I have a question or had an experience I want to tell you about</option>
						    	<option>I have a question about your products/services</option>
						    	<option>I have a problem with a product or service</option>
						    </select>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
    						<label class="text-uppercase">About Nandish Ajani</label>
    						<textarea class="form-control" rows="3"></textarea>
  						</div>		
					</div>
				</div>
				<div class="my-3">
					<a href="#" class="btn btn-primary font-weight-bold px-3">Submit</a>	
				</div>
			</form>
		</div>
	</main>
	<?php include_once '../inc/footer.php';?>
</body>
</html>