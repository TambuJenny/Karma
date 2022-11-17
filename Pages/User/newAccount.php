<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="../../css/linearicons.css">
	<link rel="stylesheet" href="../../css/owl.carousel.css">
	<link rel="stylesheet" href="../../css/themify-icons.css">
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/nice-select.css">
	<link rel="stylesheet" href="../../css/nouislider.min.css">
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/alert.css">
</head>

<body>

	<!-- Start Header Area -->
	<div id="navbar"></div>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
			<div class="col align-self-end">
					<div id="alert"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="./../../img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of
								this is the</p>
							<a class="primary-btn" href="registration.html">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Entra na família KARMA</h3>
						<div class="row login_form">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="pname" name="pnome" placeholder="Primeiro nome"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primeiro nome'" required>
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="uname" name="unome" placeholder="Ultimo nome"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ultimo nome'" required>
							</div>
                            <div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="E-mail"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required>
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="ntelefone1" name="ntelefone1" placeholder="Numero de Telefone"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numero de Telefone'" required>
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="ntelefone2" name="ntelefone2" placeholder="Nummero de Telefone alternativo"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nummero de Telefone alternativo'">
							</div>
                            <div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select id="genero">
												<option value=" 1">Genero</option>
									<option value="1">Masculino</option>
									<option value="2">Feminino</option>
									<option value="3">Não especificado</option>
									</select>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="name" placeholder="Password"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button  id="btnCriar" class="primary-btn">Log In</button>
                                <div id="alert"></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	<div id="footer"></div>
	<!-- End footer Area -->


	<script src="../../js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
	<script src="../../js/vendor/bootstrap.min.js"></script>
	<script src="../../js/jquery.ajaxchimp.min.js"></script>
	<script src="../../js/jquery.nice-select.min.js"></script>
	<script src="../../js/jquery.sticky.js"></script>
	<script src="../../js/nouislider.min.js"></script>
	<script src="../../js/jquery.magnific-popup.min.js"></script>
	<script src="../../js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="../../js/gmaps.min.js"></script>
	<script  src="../../js/main.js"></script>
	<script type="module"  src="../../js/pages/index.js"></script>
    <script type="module" src="../../js/pages/newAccount.js"></script>

</body>
</html>
