<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>YH WEBSITE</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="../cssbostrap/bootstrap.min.css" />
		<link rel="stylesheet" href="../cssbostrap/style.css" />
		<link rel="stylesheet" href="../cssbostrap/ionicons.min.css" />
    	<link rel="stylesheet" href="../cssbostrap/font-awesome.min.css" />
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="../images/fav.png"/>
	</head>
	<body>


    <!-- Header
    ================================================= -->
		<header id="header" class="lazy-load">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">YH WEBSITE</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon-search"></i>
                <input type="text" class="form-control" placeholder="Cari apa saja">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

		<!-- Top Banner
		================================================= -->
		<section id="perusahaan/jpeg">
			<div class="container">
				

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form">
					<h2 class="text-white">Daftar Disini !</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Selamat datang di YH WEBSITE</p>

<!-- Akhir dari code PHP -->

						<form action="proses.php" method="post">
							<fieldset class="form-group">
								<input type="text" class="form-control" id="user" name="user" placeholder="Masukan Username Anda" required>
							</fieldset>
							<fieldset class="form-group">
								<input type="password" class="form-control" id="pass" name="pass" placeholder="Masukan Password Anda" required>
							</fieldset>
							<button type="submit" name="daftar" class="btn-secondary" value="signup">Sign Up</button>
						</form>
					</div>
					<a href="login.php" style="text-decoration: none; font-size: 15px;">Sudah Punya Akun?</a>
					<img class="form-shadow" src="../images/bottom-shadow.png" alt="" />
				</div><!-- Sign Up Form End -->

        <svg class="arrows hidden-xs hidden-sm">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
			</div>
		</section>

    <!-- Image Divider
    ================================================= -->
    <div class="img-divider hidden-sm hidden-xs"></div>

    <!-- Footer
    ================================================= -->
		<footer id="footer">
      <div class="copyright">
        <p>Copyright © 2021 - 18111174_YuliantoHerlambang_TIFRP-18CNSA_UASWEB1 . All Right Reserved.</p>
      </div>
		</footer>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.appear.min.js"></script>
		<script src="../js/jquery.incremental-counter.js"></script>
    <script src="../js/script.js"></script>
    
	</body>
</html>
