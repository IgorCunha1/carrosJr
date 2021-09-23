<!doctype html>
<html lang="pt-br">

<head>
	<title>Hello, world!</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- Material Kit CSS -->
	<link href="public/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

	<div class="wrapper ">
		<div class="sidebar" data-color="purple" data-background-color="white">
			<!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
			<div class="logo">
				<!-- <a href="" class="simple-text logo-mini">
					CT
				</a> -->
				<a href="<?= base_url(); ?>carros" class="simple-text logo-normal">
					CAR
				</a>
			</div>

			<div class="sidebar-wrapper">
				<ul class="nav">

					<li class="nav-item active">
						<a class="nav-link" aria-haspopup="true" href=" <?= base_url(); ?>carros">
							<i class="material-icons">star</i>
							<p>Carros</p>
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" aria-haspopup="true">
							<i class="material-icons">people</i>
							<p>Pessoas</p>
						</a>
					</li>

					
				</ul>
			</div>
		</div>

		<div class="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<a class="navbar-brand" href="javascript:;">Dashboard</a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="javascript">
									<i class="material-icons">notifications</i> Notifications
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->
			<div class="content">
				<div class="container-fluid">
