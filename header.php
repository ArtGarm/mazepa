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


	<?php if($act == "index" || $act == "none"){
				partial('mainherder');
			 }
			else {
				partial('notmainherder');
			} ?>


