<?php

include('../../function/function.php')
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/demo/Template/layout_1/LTR/default/full/login_simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 06:32:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../vendor/template/global_assets/js/main/jquery.min.js"></script>
	<script src="../../vendor/template/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../vendor/template/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="../../vendor/template/layout_1/assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form class="login-form" method="POST">
                    <?php echo login() ?>
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<h5 class="mb-0">Login to your account</h5>
								<!-- <span class="d-block text-muted">Enter your credentials below</span> -->
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" class="form-control" name="user" placeholder="Username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control" name="pass" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block" name="btn_login">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="text-center">
								<a href="register.php">Register</a>
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->

			
		</div>

	</div>

</body>
</html>
