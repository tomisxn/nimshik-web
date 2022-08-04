<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Nimshik System</title>
	<!-- Brand icon -->
	<link rel="icon" href="images/nimshik-logo-black.png" type="image/x-icon">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="css/mdb.min.css">
	<!-- Custom styles -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!--Navbar -->
	<?php include('includes/navbar.php'); ?>

	<main>

  		<div class="container">

      		<!-- about bottom -->
			<section class="about-bottom py-5 mt-5" id="about">
				<div class="container py-md-5 py-3">
					<!-- <h5 class="heading text-uppercase mb-2">What we offer</h5> -->
					<h3 class="heading text-capitalize mb-sm-5 mb-3">Contact Us</h3>
					<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
					
					<section class="mb-4">

					    <div class="row">

					        <div class="col-md-12 mb-md-0 mb-5">
					            <form id="contact-form" name="contact-form" action="" method="POST">

					                <div class="row">

					                    <div class="col-md-6">
					                        <div class="md-form mb-0">
					                            <input type="text" id="name" name="name" class="form-control">
					                            <label for="name" class="">Your name</label>
					                        </div>
					                    </div>

					                    <div class="col-md-6">
					                        <div class="md-form mb-0">
					                            <input type="text" id="email" name="email" class="form-control">
					                            <label for="email" class="">Your email</label>
					                        </div>
					                    </div>

					                </div>

					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="md-form mb-0">
					                            <input type="text" id="subject" name="subject" class="form-control">
					                            <label for="subject" class="">Subject</label>
					                        </div>
					                    </div>
					                </div>

					                <div class="row">

					                    <div class="col-md-12">

					                        <div class="md-form">
					                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
					                            <label for="message">Your message</label>
					                        </div>

					                    </div>
					                </div>

					            </form>

					            <div class="text-center text-md-left">
					                <a class="btn" onclick="document.getElementById('contact-form').submit();">Send <i class="fas fa-paper-plane"></i></a>
					            </div>
					        
					            <div class="status"></div>
					        
					        </div>

					        <!-- <div class="col-md-4 text-center">
					            <img src="images/contact.jpg" width="300" height="100%">
					        </div> -->

					    </div>

					</section>

				</div>

			</section>


      	</div>
    </main>


    <?php include('includes/footer.php'); ?>