<?php 

include('../../function/function.php');


?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="../../vendor/template/layout_1/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<script src="../../vendor/template/global_assets/js/main/jquery.min.js"></script>
	<script src="../../vendor/template/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../vendor/template/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="../../vendor/template/layout_1/assets/js/app.js"></script>
	<script src="../../vendor/template/global_assets/js/demo_pages/dashboard.js"></script>

</head>

<body>

	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>
				<ul class="navbar-nav">
					
					<li class="nav-item dropdown dropdown-user">
						<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
							<img src="../../../../global_assets/images/demo/users/face11.jpg" class="rounded-circle mr-2" height="34" alt="">
							<span>Victoria</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
						</div>
					</li>
				</ul>
		</div>
	</div>
	<div class="page-content">
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>
							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.html" class="nav-link ">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>


						<li class="nav-item">
							<a href="index.html" class="nav-link active ">
								<i class="icon-user"></i>
								<span>
									Personal Data Sheet page
								</span>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="content-wrapper">
			<div class="content">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Traffic sources</h6>
								
							</div>

							<div class="card-body">
								<div class="d-md-flex">
									<ul class="nav nav-tabs nav-tabs-vertical flex-column mr-md-3 wmin-md-200 mb-md-0 border-bottom-0">
										<li class="nav-item"><a href="#vertical-left-tab1" class="nav-link active" data-toggle="tab"> I. Personal Information</a></li>
										<li class="nav-item"><a href="#vertical-left-tab2" class="nav-link" data-toggle="tab">II. Family Background</a></li>
									</ul>

									<div class="tab-content" style="font-size:12px;">
										<div class="tab-pane fade show active" id="vertical-left-tab1">
                                                <div class="card">
                                                    <div class="card-body"  style="font-size:10px !important;" >


														<form method="POST">
															<?php echo add_pds_section_1() ?>
															<div class="d-md-flex">
																<div class="row">
															<legend>PERSONAL DETAILS</legend>
																	<div class="col-md-3">
																		<div class="form-group">
																			<label>Surname</label>
																			<input type="text" style="font-size:10px !important;" name="surname" class="form-control" placeholder="">
																		</div>
																	</div>

																	<div class="col-md-3">
																		<div class="form-group">
																			<label>Firstname</label>
																			<input type="text" style="font-size:10px !important;"  name="firstname" class="form-control" placeholder="">
																		</div>
																	</div>


																	<div class="col-md-3">
																		<div class="form-group">
																			<label>Middlename</label>
																			<input type="text" style="font-size:10px !important;"  name="middlename" class="form-control" placeholder="">
																		</div>
																	</div>

																	<div class="col-md-3">
																		<div class="form-group">
																			<label>Name Extension (JR, SR)</label>
																			<input type="text" style="font-size:10px !important;"  name="name_extension" class="form-control" placeholder="">
																		</div>
																	</div>


																	<div class="col-md-2">
																		<div class="form-group">
																			<label>Date of Birth</label>
																			<input type="text" style="font-size:10px !important;"  name="date_of_birth" class="form-control" placeholder="">
																		</div>
																	</div>

																	<div class="col-md-2">
																		<div class="form-group">
																			<label>Place of Birth</label>
																			<input type="text" style="font-size:10px !important;"  name="place_of_birth" class="form-control" placeholder="">
																		</div>
																	</div>

																	<div class="col-md-2">
																		<div class="form-group">
																			<label>Sex</label>
																			<input type="text" style="font-size:10px !important;"  name="sex" class="form-control" placeholder="">
																		</div>
																	</div>

																	<div class="col-md-3">
																		<div class="form-group">
																			<label>Civil status</label>
																			<input type="text" style="font-size:10px !important;"  name="civil_status" class="form-control" placeholder="">
																		</div>
																	</div>

																	<div class="col-md-3">
																		<div class="form-group">
																			<label>Citizenship</label>
																			<input type="text" style="font-size:10px !important;"  name="citizenship" class="form-control" placeholder="">
																		</div>
																	</div>


																	<div class="col-md-2">
																		<div class="form-group">
																			<label>Height (m)</label>
																			<input type="text" style="font-size:10px !important;"  name="height" class="form-control" placeholder="">
																		</div>
																	</div>


																	<div class="col-md-2">
																		<div class="form-group">
																			<label>Weight (kg)</label>
																			<input type="text" style="font-size:10px !important;"  name="weight" class="form-control" placeholder="">
																		</div>
																	</div>


																	<div class="col-md-2">
																		<div class="form-group">
																			<label>Blood Type</label>
																			<input type="text" style="font-size:10px !important;"  name="blood_type" class="form-control" placeholder="">
																		</div>
																	</div>


																	

															<legend>ISSUED ID</legend>

																	<div class="col-md-4">
																		<div class="form-group">
																			<label>GSIS NO</label>
																			<input type="text" style="font-size:10px !important;"  name="gsis_no" class="form-control" placeholder="">
																		</div>
																	</div>


																	<div class="col-md-4">
																		<div class="form-group">
																			<label>PAG-IBIG NO.</label>
																			<input type="text" style="font-size:10px !important;"  name="pag_ibig_no" class="form-control" placeholder="">
																		</div>
																	</div>


																	<div class="col-md-4">
																		<div class="form-group">
																			<label>PHILHEALTH NO.</label>
																			<input type="text" style="font-size:10px !important;"  name="philhealth_no" class="form-control" placeholder="">
																		</div>
																	</div>



																	<div class="col-md-4">
																		<div class="form-group">
																			<label>SSS NO.</label>
																			<input type="text" style="font-size:10px !important;"  name="sss_no" class="form-control" placeholder="">
																		</div>
																	</div>



																	<div class="col-md-4">
																		<div class="form-group">
																			<label>TIN NO.</label>
																			<input type="text" style="font-size:10px !important;"  name="tin_no" class="form-control" placeholder="">
																		</div>
																	</div>



																	<div class="col-md-4">
																		<div class="form-group">
																			<label>AGENCY EMPLOYEE NO.</label>
																			<input type="text" style="font-size:10px !important;"  name="agency_employee_number" class="form-control" placeholder="">
																		</div>
																	</div>



																	<legend>CONTACT INFORMATION</legend>

																	<div class="col-md-4">
																		<div class="form-group">
																			<label>TELEPHONE NO.</label>
																			<input type="text" style="font-size:10px !important;"  name="telephone_no" class="form-control" placeholder="">
																		</div>
																	</div>


																	<div class="col-md-4">
																		<div class="form-group">
																			<label>MOBILE NO.</label>
																			<input type="text" style="font-size:10px !important;"  name="mobile_no" class="form-control" placeholder="">
																		</div>
																	</div>


																	<div class="col-md-4">
																		<div class="form-group">
																			<label>EMAIL ADDRESS (if any)</label>
																			<input type="text" style="font-size:10px !important;"  name="email_address" class="form-control" placeholder="">
																		</div>
																	</div>

																	<div class="col-md-12 ">
																		<div class=" pull right">
																		<button type="submit" name="add_pds_section_1_button" class="btn btn-primary">Save Changes</button>
																		</div>
																	</div>

																	


																</div>
															</div>			
														</form>


                                                    </div>
                                                </div>
                                            </div>

										<div class="tab-pane fade" id="vertical-left-tab2">
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
										</div>

										<div class="tab-pane fade" id="vertical-left-tab3">
											DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
										</div>

										<div class="tab-pane fade" id="vertical-left-tab4">
											Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
										</div>
									</div>
								</div>
							</div>

							<div class="chart position-relative" id="traffic-sources"></div>
						</div>
					</div>
				</div>

			</div>
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>sd
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; NMIS PDS Generator System 2023. <a href="#"></a>
					</span>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>
