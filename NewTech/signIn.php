<?php

session_start();
if (!isset($_SESSION["u"])) {

	if (isset($_GET["user"])) {

		$signUpOIn = $_GET["user"];



	} else {
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<!-- ----------------------------------------------------------------- bootstrap icons  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<!-- ----------------------------------------------------------------- bootstrap icons  -->

	<!-- ----------------------------------------------------------------- bootstrap Style  -->
	<link rel="stylesheet" href="./bootstrap.css">
	<!-- ----------------------------------------------------------------- bootstrap Style  -->
	<!-- ----------------------------------------------------------------- bootstrap icons  -->
	<link rel="stylesheet" href="./bootstrap.min.css">
	<!-- ----------------------------------------------------------------- bootstrap icons  -->

	<!-- ----------------------------------------------------------------- Local Style  -->
	<link rel="stylesheet" href="./style.css">
	<!-- ----------------------------------------------------------------- Local Style  -->


	<title>New Tech | Member</title>
</head>

<body>

	<div class="container-fluid">

		<div class="row">
			<div class="col-12  ">
				<div class="row">
					<div class="col-4 d-none d-lg-block vh-100 l-sign-left-div">

					</div>
					<div class=" col-lg-8  ">

						<div class="row vh-100">



							<div class=" col-12 offset-lg-2  col-lg-8 my-auto px-5 <?php

	if ($signUpOIn == "login") {

		echo "d-none";

	} else {

	}

                            ?>" id="signin">

								<div class="row">
									<div class=" col-12 d-none" id="altDiv">
										<div class="alert alert-warning l-para text-black alert-dismissible fade show"
											role="alert">
											<Strong>Warning : </Strong>
											<span id="alert">
												Your details are incorrect.
											</span>
										</div>
									</div>

									<div class="col-12">
										<label class="l-head-title fs-3 fw-bolder">Sign up to New Tech</label>
									</div>
									<div class="col-12 mt-3">
										<a class="btn btn-primary l-para py-2 pe-4 l-btn text-white fw-bold"> <i
												class="bi bi-google me-4 "></i>Sign up with Google</a>
										<a class="btn l-btn-social ms-3 "><i class="bi bi-twitter"></i></a>

										<a class="btn l-btn-social ms-1"><i class="bi bi-facebook"></i></a>
									</div>
									<div class="col-12 mt-3 text-center">
										<div class="row">

											<div class="col-5">
												<hr>
											</div>
											<div class="col-2">
												<span class="l-para fw-bold">Or</span>
											</div>

											<div class="col-5">
												<hr>
											</div>

										</div>
									</div>
									<div class="col-12">
										<div class="row">
											<div class="col-6">
												<label class="l-sign-input-title l-card-title fw-bolder">First
													Name</label>
												<input type="text" class="form-control mt-1 l-sign-input" id="fname">
											</div>
											<div class="col-6 ">
												<label class="l-card-title fw-bolder">Last Name</label>
												<input type="text" class="form-control mt-1  l-sign-input" id="lname">
											</div>
											<div class="col-12 mt-2">
												<label class="l-card-title fw-bolder">Email Address</label>
												<input type="text" class="form-control mt-1  l-sign-input" id="email">
											</div>
											<div class="col-12 mt-2">
												<label class="l-card-title fw-bolder">Password</label>
												<input type="password" class="form-control mt-1  l-sign-input"
													id="pass">
											</div>
										</div>
									</div>
									<div class="col-12 mt-3 d-flex ">
										<div>
											<input type="checkbox">
										</div>
										<span class="l-terms-para ps-2">Creating an account means you’re okay with our
											<a href="#">Terms of Service</a> , <a href="#">Privacy
												Policy</a> , and our default <a href="#"> Notification
												Settings</a>.</span>
									</div>
									<div class="col-12 mt-3 d-flex  align-items-center">
										<div>
											<a class="btn l-dark-btn l-btn l-para py-2 px-5 text-white accordion-body "
												onclick="register();">Register</a>
										</div>

										<span class="l-terms-para ms-3">Already a member? <a href="#"
												onclick="changeView();">Sign In</a></span>
									</div>

								</div>
							</div>



							<div class=" col-12 offset-lg-2 col-lg-8 my-auto px-5 <?php

	if ($signUpOIn == "login") {



	} else {

		echo "d-none";

	}

                            ?>" id="signup">


								<div class="row ">
									<div class=" col-12 d-none" id="alrtDiv">
										<div class="alert alert-warning l-para text-black alert-dismissible fade show"
											role="alert">
											<Strong>Warning : </Strong>
											Email or password incorrect.
										</div>
									</div>
									<div class="col-12">
										<label class="l-head-title fs-3 fw-bolder">Sign in to New Tech</label>
									</div>
									<div class="col-12 mt-3">
										<a class="btn btn-primary l-para py-2 pe-4 l-btn text-white fw-bold"> <i
												class="bi bi-google me-4 "></i>Sign in with Google</a>
										<a class="btn l-btn-social ms-3 "><i class="bi bi-twitter"></i></a>

										<a class="btn l-btn-social ms-1"><i class="bi bi-facebook"></i></a>
									</div>
									<div class="col-12 mt-3 text-center">
										<div class="row">

											<div class="col-5">
												<hr>
											</div>
											<div class="col-2">
												<span class="l-para fw-bold">Or</span>
											</div>

											<div class="col-5">
												<hr>
											</div>

										</div>
									</div>
									<div class="col-12">
										<div class="row">

											<div class="col-12 mt-2">
												<label class="l-card-title fw-bolder">Username or Email Address</label>
												<input type="text" class="form-control mt-1  l-sign-input" id="e">
											</div>
											<div class="col-12 mt-2">
												<label class="l-card-title fw-bolder">Password</label>
												<input type="password" class="form-control mt-1  l-sign-input" id="p">
											</div>
										</div>
									</div>

									<div class="col-12 mt-4 d-flex  align-items-center">
										<div>
											<a class="btn l-dark-btn l-btn l-para py-2 px-5 text-white accordion-body "
												onclick="userSiginIn();">Login
											</a>
										</div>

										<span class="l-terms-para ms-3">Not a member? <a href="#"
												onclick="changeView();">Sign up</a></span>

									</div>



								</div>













							</div>










						</div>

					</div>
				</div>
			</div>

		</div>

	</div>

	<script src="./script.js"></script>
	<script src="./bootstrap.js"></script>

</body>

</html>


<?php

} else {

	header("Location: userprofile.php");

}


?>