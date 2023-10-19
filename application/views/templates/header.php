<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Bootstrap core CSS     -->
	<link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--  Material Dashboard CSS    -->
	<link href="<?= base_url() ?>/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?= base_url() ?>/assets/css/demo.css" rel="stylesheet" />
	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.css">

</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-active-color="orange" data-background-color="black">
			<div class="sidebar-wrapper">
				<?php if ($this->session->userdata('id_user') == TRUE) : ?>
					<div class="user">
						<div class="photo">
							<img src="<?= base_url() ?>/assets/img/default-avatar.png" />
						</div>
						<div class="info">
							<h3 style="color: white;">
								<span>
									<?php

									$data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

									?>
									<?= strtoupper($data['username']); ?>
								</span>
							</h3>
							<div class="clearfix"></div>
						</div>
					</div>
				<?php endif; ?>


				<ul class="nav">
					<li class="<?php if ($title == 'Dashboard') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('dashboard') ?>">
							<i class="material-icons">dashboard</i>
							<p>Beranda</p>
						</a>
					</li>

					<li class="
						<?php if ($title == 'Management Surat') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" href="#pagesExamples">
							<i class="material-icons">email</i>
							<p>Manajemen Surat
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Management Surat') : ?>
                            <?= 'collapse in'; ?>
                        <?php endif; ?>
                        " id="pagesExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Pengajuan Surat') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/pengajuan">
										<span class="sidebar-mini">M</span>
										<span class="sidebar-normal">Pengajuan Surat</span>
									</a>
								</li>

							</ul>
						</div>
					</li>

					<?php if ($this->session->userdata('id_user') == TRUE) : ?>

						<li>
							<a href="<?= base_url() ?>logout">
								<i class="material-icons">logout</i>
								<p>Logout</p>
							</a>
						</li>

					<?php else : ?>

						<li>
							<a href="<?= base_url() ?>auth/login">
								<i class="material-icons">login</i>
								<p>Login</p>
							</a>
						</li>

					<?php endif; ?>



				</ul>
			</div>
		</div>
		<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
							<i class="material-icons visible-on-sidebar-regular">more_vert</i>
							<i class="material-icons visible-on-sidebar-mini">view_list</i>
						</button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"> <?= $title; ?> </a>
					</div>
					<!-- <div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">



							<li>
								<a href="<?= base_url() ?>auth/login" class="dropdown-toggle">
									<i class="material-icons">login</i>
									<p class="hidden-lg hidden-md">Login</p>
								</a>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
									<p class="hidden-lg hidden-md">Profile</p>
								</a>
							</li>
							<li class="separator hidden-lg hidden-md"></li>
						</ul>
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group form-search is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i>
								<div class="ripple-container"></div>
							</button>
						</form>
					</div> -->
				</div>
			</nav>