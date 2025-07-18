<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<title>Login</title>
	<!--     Fonts and icons     -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

	<!-- Nucleo Icons -->
	<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- Material Icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
	<!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>css/material-dashboard.css">
	<!-- <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>

<body class="bg-gray-200">
	<main class="main-content mt-0">
		<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
			<span class="mask bg-gradient-dark opacity-6"></span>
			<div class="container my-auto">
				<div class="row">
					<div class="col-lg-4 col-md-8 col-12 mx-auto">
						<div class="card z-index-0 fadeIn3 fadeInBottom">
							<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
								<div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
									<h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
								</div>
							</div>
							<div class="card-body">
								<?php if ($this->session->flashdata('error')): ?>
									<p style="color:red"><?= $this->session->flashdata('error') ?></p>
								<?php endif; ?>
								<form role="form" class="text-start" method="post" action="<?= base_url('loginn') ?>">
									<div class="input-group input-group-outline my-3">
										<label class="form-label">Email</label>
										<input type="text" name="email" class="form-control">
									</div>
									<div class="input-group input-group-outline mb-3">
										<label class="form-label">Password</label>
										<input type="password" name="password" class="form-control">
									</div>
									<div class="text-center">
										<button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign in</button>
									</div>
									<p class="mt-4 text-sm text-center">
										Don't have an account?
										<a href="<?= base_url('regis') ?>" class="text-primary text-gradient font-weight-bold">Sign up</a>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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