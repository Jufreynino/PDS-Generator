<?php 

include('../../function/function.php');

session_start();
if(!isset($_SESSION['id']))
{

	header('location:../auth/login.php');
}
else
{

}


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

    <script src="../../vendor/template/global_assets/js/demo_pages/dashboard.js"></script>
    <script src="../../vendor/template/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>  
	<script src="../../vendor/template/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script src="../../vendor/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="../../vendor/template/global_assets/js/demo_pages/datatables_responsive.js"></script>

	<script src="../../vendor/template/layout_1/assets/js/app.js"></script>

    <script src="../../vendor/template/global_assets/js/demo_pages/table_responsive.js"></script>
    <style>
        .wrappers {
  overflow-x: scroll;
}

.wrappers table {
  white-space: nowrap;
}

/** Only for demo */
table,
td,
th {
  border-collapse: collapse;
  border: 1px solid #777;
}

th {
  padding: 5px;
  background: #ddd;
}

td {
  padding: 5px 10px;
}
.form-control{
    padding:5px;
    margin:0px;
}
    </style>
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
								
							</div>

							<div class="card-body">
									<ul class="nav nav-tabs nav-tabs-vertical flex-column mr-md-3 wmin-md-200 mb-md-0 border-bottom-0">
                                        <li class="nav-item"><a href="pds_section_1.php" class="nav-link " > I. Personal Information</a></li>
										<li class="nav-item"><a href="pds_section_2.php" class="nav-link " >II. Family Background</a></li>
										<li class="nav-item"><a href="pds_section_3.php" class="nav-link " >III. Educational Background</a></li>
										<li class="nav-item"><a href="pds_section_4.php" class="nav-link " >IV. Civil Service Eligibilty</a></li>
										<li class="nav-item"><a href="pds_section_5.php" class="nav-link active" >V. Work Experience</a></li>
										<li class="nav-item"><a href="pds_section_6.php" class="nav-link" >VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</a></li>
										<li class="nav-item"><a href="pds_section_7.php" class="nav-link" >VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</a></li>
										<li class="nav-item"><a href="pds_section_8.php" class="nav-link" >VIII. OTHER INFORMATION</a></li>
										<li class="nav-item"><a href="pds_section_9.php" class="nav-link" >Last Part</a></li>


																				



									</ul>

									<div class="tab-content" style="font-size:12px;">
										<div class="tab-pane fade show active" id="vertical-left-tab2">


														<?php echo pds_section5_update() ?>


                                            </div>
                                            </div>

										
									</div>
							</div>
					</div>
				</div>

			</div>
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
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


<script>
		$('.datatable-responsive').dataTable();
	</script>
