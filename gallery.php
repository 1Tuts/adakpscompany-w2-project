<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Image Gallery with lightbox</title>
	<link type="text/css" rel="stylesheet" href="1styles.css" />
	<link type="text/css" rel="stylesheet" href="style-lightbox.css" />
	<link type="text/css" rel="stylesheet" href="lightbox.css" />

</head>
<body>
	<div class="cover container">
		<header class="w24 h23 cover">
			<div class="w5 h5 mt3 logo"></div>
			<nav class="menu">
				<menu class="w12 ml1 h5 mt3 left">
					<li class="left ml1 mt2"><a href="index.html">home</a></li>
					<li class="left ml1 mt2"><a href="#">porfoliote</a>
						<menu class="abs">
							<li><a href="#">grup1</a></li>
							<li><a href="#">grup1</a></li>
							<li><a href="#">grup1</a></li>
						</menu>
					</li>
					<li class="left ml1 mt2"><a href="gallery.html">gallery</a></li>
					<li class="left ml1 mt2"><a href="about.html">about us</a></li>
				</menu>
			</nav>
			<div><input class="w4 h3 mt5 right search" type="text" placeholder="Search..."></div>
		</header>
		<div class=" w13 left cover content1">
			<div class=" mlra cover gallery">
				<ul>
					<li>
						<a href="images\gallery1\image-1.jpg" title="Item 1 title ..." data-desc="Item 1 description and bla bla bla ..." rel="lightbox[group1]">
							<img src="images\gallery1\thumb-1.jpg" alt="Image description for search engins" />
						</a>
					</li>
					<li>
						<a href="images\gallery1\image-2.jpg" title="Item 2 title ..." data-desc="Item 2 description and bla bla bla ..." rel="lightbox[group1]">
							<img src="images\gallery1\thumb-2.jpg" alt="Image description for search engins" />
						</a>
					</li>
					<li>
						<a href="images\gallery1\image-3.jpg" title="Item 3 title ..." data-desc="Item 3 description and bla bla bla ..." rel="lightbox[group1]">
							<img src="images\gallery1\thumb-3.jpg" alt="Image description for search engins" />
						</a>
					</li>
					<li>
						<a href="images\gallery1\image-4.jpg" title="Item 4 title ..." data-desc="Item 4 description and bla bla bla ..." rel="lightbox[group1]">
							<img src="images\gallery1\thumb-4.jpg" alt="Image description for search engins" />
						</a>
					</li>
					<li>
						<a href="images\gallery1\image-5.jpg" title="Item 5 title ..." data-desc="Item 5 description and bla bla bla ..." rel="lightbox[group1]">
							<img src="images\gallery1\thumb-5.jpg" alt="Image description for search engins" />
						</a>
					</li>
					<li>
						<a href="images\gallery1\image-3.jpg" title="Item 3 title ..." data-desc="Item 3 description and bla bla bla ..." rel="lightbox[group1]">
							<img src="images\gallery1\thumb-3.jpg" alt="Image description for search engins" />
						</a>
					</li>
				</ul>
			</div>
		</div>	
		<div class="left cover content2">
			<div class="box1">
				<div class="image"></div>
				<div class="text"><a href="#">Gallery</a></div>
			</div>
			<div class="box2">
				<div class="image"></div>
				<div class="text"> We plan innovations to meet tomorrow's requirements. We are the market leaders. This implies an obligation to assume responsibility for the public and the environment. The high quality of our products enhances and creates an atmosphere of well-being for people</div> 
			</div>
		</div>
	</div>	


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
</body>
</html>