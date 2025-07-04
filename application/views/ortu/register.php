<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url("assets/admin/") ?>img/apple-icon.png">
	<!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
    <link rel="icon" href="<?= base_url("assets/admin/") ?>img/favicon.png">
	<!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
	<title>
		Registrasi
	</title>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
	<!-- Nucleo Icons -->
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>css/nucleo-icons.css">
	<!-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>css/nucleo-svg.css">
	<!-- <link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> -->
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- Material Icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
	<!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>css/material-dashboard.css">
	<!-- <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" /> -->
</head>

<body class="">
	<div class="container position-sticky z-index-sticky top-0">
		<div class="row">
			<div class="col-12">
			</div>
		</div>
	</div>
	<main class="main-content  mt-0">
		<section>
			<div class="page-header min-vh-100">
				<div class="container">
					<div class="row">
						<div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
							<div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/admin/img/illustrations/illustration-signup.jpg'); background-size: cover;">
							</div>
						</div>
						<div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
							<div class="card card-plain">
								<div class="card-header">
									<h4 class="font-weight-bolder">Sign Up</h4>
									<p class="mb-0">Enter your email and password to register</p>
								</div>
								<div class="card-body">
									<?php if($this->session->flashdata('error')): ?>
									  <p style="color:red"><?= $this->session->flashdata('error') ?></p>
									<?php endif; ?>
									<form role="form" method="post" action="<?= base_url('auth/registerr') ?>">
										<div class="input-group input-group-outline mb-3">
											<label class="form-label">Username</label>
											<input type="text" name="username" class="form-control">
										</div>
										<div class="input-group input-group-outline mb-3">
											<label class="form-label">Email</label>
											<input type="email" name="email" class="form-control">
										</div>
										<div class="input-group input-group-outline mb-3">
											<label class="form-label">Password</label>
											<input type="password" name="password" class="form-control">
										</div>
										<div class="input-group input-group-outline mb-3">
											<label class="form-label">konfirm Password</label>
											<input type="password" name="password2" class="form-control">
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0">Sign Up</button>
										</div>
									</form>
								</div>
								<div class="card-footer text-center pt-0 px-lg-2 px-1">
									<p class="mb-2 text-sm mx-auto">
										Already have an account?
										<a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Sign in</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>