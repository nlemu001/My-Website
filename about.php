<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>About page | Initio - Free, multipurpose html5 template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icon font -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body>

<header id="header">
	<?php 
		$page = "index.php";
		include 'common/header.php';
	?>
</header>

<main id="main">

	<div class="container">

		<div class="row topspace">
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<ul class="nav text-right nav-side">
					<li class="active"><a href="#ui">Bio</a></li>
<!-- 					<li><a href="#frontend">Frontend development</a></li>
					<li><a href="#backend">Backend development</a></li>
					<li><a href="#projects">Side projects</a></li> -->
				</ul>

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<p>Hi there! My name is Neri Lemus, I am a graduate from the University of California, Riverside with a BS in Computer Engineering. 
				My concentrations are in software development, mainly back-end work. I also like to dabble with Mobile Apps. I also like to do some electrical/circuit work on the side.
				I have a passion for software development and really enjoy learning about new software products and technologies. 
				I enjoy exploring problems and finding solutions that best suit and satisfy the customer and their needs.</p>
				<!-- <p><img src="assets/images/mac.jpg" alt="" class="" width="100%" ></p> -->
				<h3>Work Experience</h3>
				<p><b>Zodiac Aerospace -- </b><i>Software Engineer | April 2015 - Present</i>
				<ul style="list-style-type:circle">
				  <li>Primarily wrote back-end code in C++ to manage a wireless streaming entertainment system aboard commercial aircraft.</li>
				  <li>Wrote high-level designs and documentation for new software components.</li>
				  <li>Wrote customer-facing GUI code in QML as well supporting backend code in C++.</li>
				  <li>Worked as part of a small team of developers requiring minimal supervision from management.</li>
				  <li>Used available resources and took initiative to seek clarification when faced with difficult/challenging problems.</li>
				  <li>Supervised the acquisition, testing and release of customer-facing mobile apps from a 3rd party developer.</li>
				</ul>
				</p>
				<h3>Fugit, laboriosam</h3>
				<p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
			</article>
			<!-- /Article -->
			

		</div>
	</div>	<!-- /container -->
	
</main>

<footer id="footer">
	<?php
		$page = "index.php";
		include 'common/footer.php'
	?>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
