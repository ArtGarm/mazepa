<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />

	<link rel="stylesheet" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="all" />

	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

	<!--<link rel="stylesheet" href="css/tuesdayAnimate.css" media='all' />-->

	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>


	<!-- bootstrap -->

	<script src="js/bootstrap.js" type="text/javascript"></script>

	<!-- /bootstrap -->

	<script src="js/selectivizr-min.js" type="text/javascript"></script>

	<!--<link rel="stylesheet" type="text/css" href="css/jquery.znice.css" media="all" />-->
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>
	<!--<script src="js/jquery.znice.validate.js" type="text/javascript"></script>
	<script src="js/jquery.znice.js" type="text/javascript"></script>-->

	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="all" />
	<script src="fancybox/jquery.fancybox.js" type="text/javascript"></script>

	<script src="js/modernizr.js" type="text/javascript"></script>
	<script src="js/jquery.watermark.min.js" type="text/javascript"></script>

<!-- sliders -->
	<link rel="stylesheet" type="text/css" href="css/slick.css" media="all" />
	<script src="js/slick.js" type="text/javascript"></script>
<!-- sliders -->

<!-- jScrollPane -->
	<!--<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>-->
<!-- jScrollPane -->


<!-- remove Files -->

	<!--<script src="js/myalert.js" type="text/javascript"></script>
	<script src="develop/autocssrenew.js" type="text/javascript"></script>-->

    <link rel="stylesheet" type="text/css" href="css/develop_2.css" media="all" />
    <script src="js/develop_2.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="css/develop_3.css" media="all" />
    <script src="js/develop_3.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="css/develop_4.css" media="all" />
    <script src="js/develop_4.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="css/develop_5.css" media="all" />
    <script src="js/develop_5.js" type="text/javascript"></script>
<!-- remove Files -->

	<link rel="stylesheet" href="css/style_main.css" media="all" />
	<link rel="stylesheet" href="css/adaptation.css" media="all" />
	<script src="js/vitia.js" type="text/javascript"></script>
	<script src="js/scr.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script>
		document.createElement('header');
		document.createElement('nav');
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('footer');
		document.createElement('time');
		</script>
		<script src="js/pie.js" type="text/javascript"></script>
	<![endif]-->

	<!--[if lt IE 8]><script src="js/oldie/warning.js"></script><script>window.onload=function(){e("js/oldie/")}</script><![endif]-->
</head>
<body>
	<?partial('zHiddenBlock');?>
	<header class="header <? echo $act; ?>">
		<div class="header-img-device">
			<img src="images/slider-img.jpg" alt="" />
		</div>
		<div class="header-slider-wrap">
			<div class="header-slider-wrap-main">
				<div class="header-slider-item">
					<img src="images/slider-img-hight.jpg" alt="" />
				</div>
				<div class="header-slider-item video active">
					<div class="video-item">
						<video autoplay loop muted>
							<source src="video/sait.webm" type="video/webm">
							<source src="video/sait.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content-wrap">
			<div class="mbox">
				<div class="header-content-wrap-main">
					<div class="header-content-top cfix">
						<div class="header-top-left">
							<div class="header-top-buttons-wrap">

								<a href="#">
									<span class="button-text">Подписаться на новости</span>
									<span class="button-icon"></span>
								</a>
							</div>
						</div>
						<div class="header-top-right cfix-after">
							<div class="header-top-soc cfix">
								<div class="header-top-soc-wrap">
									<a href="#" class="blue vfix-before">
										<img src="images/soc4.png" alt="">
									</a>
								</div>
								<div class="header-top-soc-wrap">
									<a href="#" class="red vfix-before">
										<img src="images/soc3.png" alt="">
									</a>
								</div>
								<div class="header-top-soc-wrap">
									<a href="#" class="blue vfix-before">
										<img src="images/soc2.png" alt="">
									</a>
								</div>
								<div class="header-top-soc-wrap">
									<a href="#" class="ligth-blue vfix-before">
										<img src="images/soc1.png" alt="">
									</a>
								</div>
							</div>
							<div class="header-top-langChange">
								<div class="header-top-langChange-value">
									Рус
								</div>
								<div class="header-top-langChange-wrap cfix-after">
									<a href="#">Укр</a>
									<a href="#" class="active">Рус</a>
									<a href="#">Eng</a>
								</div>
							</div>
						</div>
					</div>
					<div class="header-form-wrap">
						<div class="header-form-main">
							<form class="header-form" action="">
								<div class="form-title">
									<div class="form-big-title">ИГОРЬ МАЗЕПА</div>
									<div class="form-small-title">
										<p>генеральный директор инвестиционной компании</p>
										<p>Concorde Capital (Украина, г. Киев)</p>
									</div>
								</div>
								<div class="form-row">
									<div class="form-input-wrap form_row">
										<input type="text" name="name" required="required" placeholder="Имя" />
									</div>
									<div class="form-input-wrap form_row">
										<input type="email" name="subname" required="required" placeholder="E-mail" />
									</div>
								</div>
								<div class="form-row submit-wrap">
									<button type="submit">
										<span>ПОДПИСАТЬСЯ</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="header-navigation">
			<div class="header-navigation-device-icon">
				<span></span>
			</div>
			<div class="mbox">
				<div class="header-navigation-wrap-top">
					меню
					<div class="header-navigation-wrap-top-right">
					</div>
				</div>
				<ul class="header-navigation-wrap">
					<li class="active">
						<a href="http://dev-verst.sheep.fish/mazepa/index.html">БИОГРАФИЯ</a>
					</li>
					<li>
						<a href="#">Деятельность</a>
					</li>
					<li>
						<a href="http://dev-verst.sheep.fish/mazepa/news.html">новости</a>
					</li>
					<li>
						<a href="http://dev-verst.sheep.fish/mazepa/smi.html">сми</a>
					</li>
					<li>
						<a href="http://dev-verst.sheep.fish/mazepa/foto.html">фото/видео</a>
					</li>
				</ul>
			</div>
		</div>
	</header>