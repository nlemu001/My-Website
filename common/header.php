<html>
	<body>
		<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="assets/images/face.jpg" alt="">
			<span class="title">Neri Lemus</span>
			<br>
			<?php if( $page=="blog.php" ) : ?>
					<span class="title">It's not all binary - By Neri</span>
			<?php endif; ?>
		</h1>
		</div>

		<nav class="navbar navbar-default navbar-sticky">
			<div class="container-fluid">
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
						<span class="sr-only">Toggle navigation</span> 
						<span class="icon-bar"></span> <span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</button>
				</div>
				
				<div class="navbar-collapse collapse">
					
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="projects.php">Projects</a></li>
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="sidebar-left.html">Left Sidebar</a></li>
								<li><a href="sidebar-right.html">Right Sidebar</a></li>
								<li><a href="single.html">Blog Post</a></li>
							</ul>
						</li> -->
						<li><a href="blog.php">Blog</a></li>
					</ul>
				
				</div><!--/.nav-collapse -->			
			</div>	
		</nav>
	</body>
</html>