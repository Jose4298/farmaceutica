<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DevOOPS v2</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{!!Html::style('/estilos/plugins/bootstrap/bootstrap.css')!!}
		{!!Html::style('/estilos/plugins/jquery-ui/jquery-ui.min.css')!!}
		{!!Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')!!}
        {!!Html::style('http://fonts.googleapis.com/css?family=Righteous')!!}
		{!!Html::style('/estilos/plugins/fancybox/jquery.fancybox.css')!!}
		{!!Html::style('/estilos/plugins/fullcalendar/fullcalendar.css')!!}
		{!!Html::style('/estilos/plugins/xcharts/xcharts.min.css')!!}
		{!!Html::style('/estilos/plugins/select2/select2.css')!!}
		{!!Html::style('/estilos/plugins/justified-gallery/justifiedGallery.css')!!}
		{!!Html::style('/estilos/css/style_v2.css')!!}
		{!!Html::style('/estilos/plugins/chartist/chartist.min.css')!!}
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--Start Header-->
		<div id="screensaver">
			<canvas id="canvas"></canvas>
			<i class="fa fa-lock" id="screen_unlock"></i>
		</div>
		<div id="modalbox">
			<div class="devoops-modal">
				<div class="devoops-modal-header">
					<div class="modal-header-name">
						<span>Basic table</span>
					</div>
					<div class="box-icons">
						<a class="close-link">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="devoops-modal-inner">
				</div>
				<div class="devoops-modal-bottom">
				</div>
			</div>
		</div>
		<header class="navbar">
			<div class="container-fluid expanded-panel">
				<div class="row">
					<div id="logo" class="col-xs-12 col-sm-2">
						<a href="index.html">DevOOPS v2</a>
					</div>
					<div id="top-panel" class="col-xs-12 col-sm-10">
						<div class="row">
							<div class="col-xs-8 col-sm-4">
								<div id="search">
									<input type="text" placeholder="search"/>
									<i class="fa fa-search"></i>
								</div>
							</div>
							<div class="col-xs-4 col-sm-8 top-panel-right">
								<a href="#" class="about">about</a>
								<a href="index_v1.html" class="style1"></a>
								<ul class="nav navbar-nav pull-right panel-menu">
									<li class="hidden-xs">
										<a href="index.html" class="modal-link">
											<i class="fa fa-bell"></i>
											<span class="badge">7</span>
										</a>
									</li>
									<li class="hidden-xs">
										<a class="ajax-link" href="ajax/calendar.html">
											<i class="fa fa-calendar"></i>
											<span class="badge">7</span>
										</a>
									</li>
									<li class="hidden-xs">
										<a href="ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span class="badge">7</span>
										</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
											<div class="avatar">
												<img src="img/avatar.jpg" class="img-circle" alt="avatar" />
											</div>
											<i class="fa fa-angle-down pull-right"></i>
											<div class="user-mini pull-right">
												<span class="welcome">Welcome,</span>
												<span>Jane Devoops</span>
											</div>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="#">
													<i class="fa fa-user"></i>
													<span>Profile</span>
												</a>
											</li>
											<li>
												<a href="ajax/page_messages.html" class="ajax-link">
													<i class="fa fa-envelope"></i>
													<span>Messages</span>
												</a>
											</li>
											<li>
												<a href="ajax/gallery_simple.html" class="ajax-link">
													<i class="fa fa-picture-o"></i>
													<span>Albums</span>
												</a>
											</li>
											<li>
												<a href="ajax/calendar.html" class="ajax-link">
													<i class="fa fa-tasks"></i>
													<span>Tasks</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-cog"></i>
													<span>Settings</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-power-off"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--End Header-->
		<!--Start Container-->
		<div id="main" class="container-fluid">
			<div class="row">
				<div id="sidebar-left" class="col-xs-2 col-sm-2">
					<ul class="nav main-menu">
						<li>
							<a href="#" class="ajax-link">
								<i class="fa fa-dashboard"></i>
								<span class="hidden-xs">INICIO</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="{{route('estado.index')}}" class="dropdown-toggle">
								<i class="fa fa-table"></i>
								<span class="hidden-xs">Estados</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="{{route('cliente.index')}}" class="dropdown-toggle">
								<i class="fa fa-table"></i>
								 <span class="hidden-xs">Clientes</span>
							</a>
							
						</li>
						<li class="dropdown">
							<a href="{{route('municipio.index')}}" class="dropdown-toggle">
								<i class="fa fa-table"></i>
								 <span class="hidden-xs">Municipio</span>
							</a>
							
						</li>
						<li class="dropdown">
							<a href="{{route('producto.index')}}" class="dropdown-toggle">
								<i class="fa fa-table"></i>
								 <span class="hidden-xs">Producto</span>
							</a>
							
						</li>
						
						
					
					
						
				
					</ul>
				</div>
				<!--Start Content-->
				<div id="content" class="col-xs-12 col-sm-10">
					<div class="row">
						<div id="breadcrumb" class="col-xs-12">
							<a href="#" class="show-sidebar">
								<i class="fa fa-bars"></i>
							</a>
							<ol class="breadcrumb pull-left">
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Dashboard</a></li>
							</ol>
							<div id="social" class="pull-right">
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
					@yield('content')
				</div>
				
				<!--End Content-->
			</div>
		</div>
<!--End Container-->


{!!Html::script('/estilos/js/devoops.js')!!}
{!!Html::script('/estilos/plugins/tinymce/jquery.tinymce.min.js')!!}
{!!Html::script('/estilos/plugins/tinymce/tinymce.min.js')!!}
{!!Html::script('/estilos/plugins/bootstrap/bootstrap.min.js')!!}
{!!Html::script('/estilos/plugins/jquery-ui/jquery-ui.min.js')!!}
{!!Html::script('/estilos/plugins/jquery/jquery.min.js')!!}
{!!Html::script('/estilos/plugins/justified-gallery/jquery.justifiedGallery.min.js')!!}
</body>
</html>
